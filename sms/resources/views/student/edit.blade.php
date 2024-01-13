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
<form method="post" action="{{ route('student.update', $student) }}">
        @csrf
        @method('PUT')
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $student->first_name}}" required>
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $student->last_name}}" required>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="{{ $student->address}}" required>
    </div>
    <div class="mb-3">
      <label for="telno" class="form-label">Telephone Number</label>
      <input type="tel" class="form-control" id="telno" name="telno" value="{{ $student->telno}}" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ $student->email}}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Student</button>

       
    </form>