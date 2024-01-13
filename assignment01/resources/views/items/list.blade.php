<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Item list</title>
</head>

<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;  

}
</style>


<body>
<h1>Item List</h1>
<a href="{{route('item.create')}}">Create items</a>

@if(session('success'))
	<div class="alert alert-success" id="success-alert">
        {{ session('success') }}
  </div>

  <script>
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 3000); // <-- time in milliseconds (3 seconds in this example)
</script>


@endif

<table style="width:100%">
  <tr>
    <th>Item Id</th>
    <th>Name</th>
    <th>Qty</th>
    <th>Action</th>
  </tr>

  @foreach($itemlist as $i)
  <tr>
   
    <td>{{$i['id']}}</td>
    <td>{{$i['name']}}</td>
    <td>{{$i['qty']}}</td>


   
    <td><a href="{{ route('item.edit', $i) }}">Update stock</a></td>
  
</tr>
@endforeach


</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>