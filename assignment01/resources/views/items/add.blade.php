<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  <title>Add items</title>
</head>
<body>

<div class="container mt-5">
    <a href="{{route('item.index')}}">View items</a>
  <h2>Add items</h2>
  <form action="{{ route('item.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="first_name" class="form-label">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" required>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      
    <select name="category" id="category">
      <option value="category 01">category 01</option>
      <option value="category 02">category 02</option>
      <option value="category 03">category 03</option>
      <option value="category 04">category 04</option>
    </select>    

    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" name="description" required>
    
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
