<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book appointments at medical clinice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{  asset('css/style.css') }}">
  <link rel="stylesheet" href="{{  asset('css/hover.css') }}">
  <link rel="stylesheet" href="{{  asset('css/all.css') }}">
</head>

<body>
 <!-- ///////////////////////////////////head///////////////////////////////////////////////////////// -->
<section>
 @include('doctor.components.navbar') 
</section>
<!-- ///////////////////////////////////////////////////////////// -->
<section><div style="width:100%;height: 200px;"></div></section>

<section>
    <div class="ms-5" style="margin-top: 50px;">
<div style="margin-left:300px;"><h5 class="ms-5">Enter the name and price of the work :</h5></div>
<div class="fs-5" style="width: 500px;height:200px;background:linear-gradient(45deg,#fbeabc,rgb(214, 253, 223));border-radius: 20px;margin-left: 300px;">
  <form action="{{ route('update_work',$work->id) }}" method="POST">
      @csrf
      <label class="form-label mt-4 ms-3 fw-bold">Business name :</label>
      <input type="text" style="border-radius: 10px;" name="name_of_element" value="{{ $work->name_of_element }}"><br>
      <label class="form-label mt-4 ms-3 fw-bold">price :</label>
      <input type="number"style="border-radius: 10px;" name="cost" value="{{ $work->cost }}"><br>
      <input class="mt-3 ms-4 w-25 hvr-shrink" type="submit"style="border-radius: 10px;" value="Update work">
     
  </form>
  </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>

</body>