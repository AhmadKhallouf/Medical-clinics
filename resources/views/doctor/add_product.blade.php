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
          <!-- /////////////////////////////////////////////////////////////// --> 
          <div style="width:100%;height: 150px;"></div>
          <div class="container fs-5" style="width: 500px;height:500px;background:linear-gradient(45deg,#d7d79a,rgb(255, 185, 100));border-radius: 20px;">
<form action="{{ route('add_product_d') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label class="form-label mt-5 fw-bold">Name :</label>
    <input type="text" name="name" style="border-radius: 10px;" required><br>
    <label class="form-label mt-4 fw-bold">Description :</label>
    <input type="text" name="description" style="border-radius: 10px;" required><br>
    <label class="form-label mt-4 fw-bold">concentration :</label>
    <input type="number" name="concentration" style="border-radius: 10px;" required><br>
    <label class="form-label mt-4 fw-bold">quantity :</label>
    <input type="number" name="quantity" style="border-radius: 10px;" required><br>
    <label class="form-label mt-4 fw-bold">price :</label>
    <input type="number" name="price" style="border-radius: 10px;" required><br>
    <label class="form-label mt-4 fw-bold">expiration date :</label>
    <input type="date" name="expiration_date" style="border-radius: 10px;" required><br>
    <label class="form-label mt-4 fw-bold">Image :</label>
    <input type="file" name="image" style="border-radius: 10px;" required><br>
    <input class="mt-3 ms-2 w-25 hvr-shrink" type="submit"style="border-radius: 10px;">

</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>
</body>

