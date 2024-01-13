<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  <title>Update stocks</title>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
    <a href="{{route('item.index')}}">View items</a>
    </div>
    <div class="col-md-3">
    <a href="{{route('item.create')}}">Create items</a>
    </div>
  <h2>Add stocks</h2>
  

  <form method="post" action="{{ route('item.update', $item) }}">
  
  @csrf
  @method('PUT')


    <div class="mb-3">
      <label for="itemname" class="form-label">Item Name</label>
      <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $item->name}}" readonly>
    </div>
   
    <div class="mb-3">
      <label for="qty" class="form-label">Qty</label>
      <input type="text" class="form-control" id="qty" name="qty" value="{{ $item->qty}}" required>
    </div>
   
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
