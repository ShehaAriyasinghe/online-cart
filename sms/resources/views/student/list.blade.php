<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  <title>Register Student</title>
</head>
<body>

<div class="container mt-5">


    
    <a href="{{route('student.create')}}">Add New Student</a>
  <h2>List Student</h2>


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



  <table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Tel No</th>
            <th>Email</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($list as $i)
        <tr>
            <td>{{ $i['first_name'] }} {{ $i['last_name'] }}</td>
            <td>{{ $i['address'] }}</td>
            <td>{{ $i['telno'] }}</td>
            <td>{{ $i['email'] }}</td>
            <td><a href="{{route('student.edit', $i)}}">edit</a></td>
            <td>

            <form method="post" action="{{ route('student.destroy', $i) }}" onsubmit="return confirm('Are you sure you want to delete this student?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-link">Delete</button>
                </form>



      </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
