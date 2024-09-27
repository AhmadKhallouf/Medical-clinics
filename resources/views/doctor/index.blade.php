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
  
 @include('doctor.components.navbar') 
 
 
<!-- ///////////////////////////////////////////////////////////// -->

<section>
  <div style="width:100%;height: 200px;"></div>
  <div class="container text-center"style="height:250px;width:500px;margin-left:100px;float:left;background-color:#cc8100">
    <i class="fas fa-procedures fs-1 " style="color: #ffffff;margin-top: 30px;"></i>
    <h2 class="text-light fs-1 mt-2">Total Patients</h2>
    <p class="text-light fs-1">{{ $total_patients }}</p>
    <a class="text-decoration-none" href="DrPatinit.html"><p class="text-light fs-5">View details</p></a>
  </div>
  <div class="container text-center"style="height:250px;width:500px;margin-left:200px;background-color:green;float:left;">
    <i class="fas fa-calendar-check fa-lg fs-1" style="color: #ffffff;margin-top: 30px;"></i>
    <h2 class="text-light fs-1 mt-2">Total Appointment</h2>
    <p class="text-light fs-1">{{ $total_appointments }}</p>
    <a class="text-decoration-none" href="DrAppointment.html"><p class="text-light fs-5">View details</p></a>
  </div>

</section>

<!-- ////////////////////////////////////////////price list////////////////// -->
 <section style="margin-top: 450px;">
<h2 class="text-center text-primary fs-1 mb-5">price list</h2>
<table class="table fs-4" style="margin-bottom:100px">
  <thead>
    <tr class="fs-2">
      <th scope="col">#</th>
      <th scope="col">The Job</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @foreach ($clinic->costs as $cost )
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $cost->name_of_element }}</td>
      <td>{{ $cost->cost }} $</td>
      <td><!--<button class="hvr-shrink"  style="width: 80px;background-color: rgb(6, 132, 21);color: #ffffff;border-radius: 5px;">Add</button> -->
        <a href="{{ route('update_work_page',$cost->id) }}"><button class="hvr-shrink"  style="width: 80px;background-color: rgb(0, 119, 255);color: #ffffff;border-radius: 5px;">Edit</button></a>
        <a href="{{ route('delete_work',$cost->id) }}"><button class="hvr-shrink"  style="width: 80px;background-color: rgb(173, 1, 1);color:#ffffff ;border-radius: 5px;">Delete</button></a></td>
    </tr>
    <?php $i += 1; ?>
    @endforeach
    
  </tbody>
</table>
</section>

<h5 class="ms-5">Enter the name and price of the work :</h2>
<div class="fs-5" style="width: 500px;height:200px;background:linear-gradient(45deg,#fbeabc,rgb(214, 253, 223));border-radius: 20px;margin-left: 20px;">
  <form action="{{ route('add_work') }}" method="POST">
      @csrf
      <label class="form-label mt-4 ms-3 fw-bold">Business name :</label>
      <input type="text" style="border-radius: 10px;" name="name_of_element"><br>
      <label class="form-label mt-4 ms-3 fw-bold">price :</label>
      <input type="number"style="border-radius: 10px;" name="cost"><br>
      <input class="mt-3 ms-4 w-25 hvr-shrink" type="submit"style="border-radius: 10px;" value="Add a work">
     
  </form>
  </div>

  <section>
    <div>
      <h2 style="margin-top: 150px; text-align: center;color: #a95b9c;">Some Work</h2>
      <hr style="width: 360px; height: 5px; margin:0px 0px 50px 560px;background-color: #653b5e;">
    
      <div class="fs-1" style="float: left;margin-left: 1050px;margin-top: 150px;">
        <p>Before and after therapy</p>
        <a href="{{ route('update_image_work_page',$clinic->workImages[0]->id) }}"><button class="hvr-shrink"  style="width: 80px;background-color: rgb(0, 119, 255);color: #ffffff;border-radius: 5px;">Edit</button></a>
      </div>
    
      <div class="somework4">
        <div class="divfront4" style="background-image: url({{ $clinic->workImages[0]->image_before }});"></div>
        <div class="divback4" style="background-image: url({{ $clinic->workImages[0]->image_after }})"></div>
      </div>
      <div class="fs-1" style="float: left;margin-left: 1050px;margin-top: 150px;">
        <p>Before and after therapy </p>
        <a href="{{ route('update_image_work_page',$clinic->workImages[0]->id) }}"><button class="hvr-shrink"  style="width: 80px;background-color: rgb(0, 119, 255);color: #ffffff;border-radius: 5px;">Edit</button></a>
      </div>
    
    
      <div class="somework5">
        <div class="divfront5" style="background-image: url({{ $clinic->workImages[1]->image_before }});"></div>
        <div class="divback5"  style="background-image: url({{ $clinic->workImages[1]->image_after }});"></div>
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