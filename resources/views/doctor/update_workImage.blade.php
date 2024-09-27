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
    <div>
      <h2 style="margin-top: 150px; text-align: center;color: #a95b9c;">Some Work</h2>
      <hr style="width: 360px; height: 5px; margin:0px 0px 50px 560px;background-color: #653b5e;">
    
      <div class="fs-1" style="float: left;margin-left: 1050px;margin-top: 150px;">
        <p>Before therapy</p>
        <form action="{{ route('update_image_work',$images->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="before_image">
        <button type="submit" class="hvr-shrink"  style="width: 120px;background-color: rgb(0, 119, 255);color: #ffffff;border-radius: 5px;">update</button>
    </form>
      </div>
    
      <div class="somework4">
        <div class="divfront4" style="background-image: url({{ $images->image_before }});"></div>
      </div>
      <div class="fs-1" style="float: left;margin-left: 1050px;margin-top: 150px;">
        <p> after therapy </p>
        <form action="{{ route('update_image_work',$images->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="after_image">
        <button type="submit" class="hvr-shrink"  style="width: 120px;background-color: rgb(0, 119, 255);color: #ffffff;border-radius: 5px;">update</button>
    </form>
      </div>
    
    
      <div class="somework5">
        <div class="divback5"  style="background-image: url({{ $images->image_after }});"></div>
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