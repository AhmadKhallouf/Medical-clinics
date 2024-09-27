<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book appointments at medical clinice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>

<body>
  <!-- ///////////////////////////////////head///////////////////////////////////////////////////////// -->
  <section>
  @include('patient.components.navbar')
</section>
  
<div style="height: 150px;width: 100%;"></div>
  <!-- ///////////////////////////////////////////////card///////////////////////////////////////////// -->
<h2 class="text-center fs-1" style="margin-top: 150px;color:rgb(219, 142, 0)">{{ $special }} &nbsp; clinics</h2>
<hr class="hvr-grow-shadow" style="width: 300px; height: 5px; margin-left: 550px;background-color: rgba(193, 123, 3, 0.864); " >
  <div class="container" style="margin-top: 20px;">
    <div class="row">

        @foreach ( $clinics as $clinic )

      <div class="col-lg-4 my-3">
        <div class="card hvr-grow-shadow cover" style="width: 18rem;">
          <img src="{{ asset($clinic->users->image) }}" class="card-img-top" alt="omar-hasan">
          <div class="card-body">
            <h5 class="card-title">Dr.{{ $clinic->users->first_name }} {{ $clinic->users->last_name }}</h5>
            <i class="fas fa-user text-warning"></i>
            <span>{{ $clinic->medical_specialty }}</span>
            &nbsp;
            &nbsp;
            <i class="far fa-clock text-warning"></i>
            <span>{{ $clinic->inspection_time }} Des</span>
            &nbsp;
            &nbsp;
            <i class="fas fa-comments text-warning"></i>
            <span>{{ $clinic->number_of_booking_times }}</span>
            <p class="card-text">{{ $clinic->description }}<br> <b class="text-primary">Location :</b> {{ $clinic->address }}</p>
            <a href="{{ route('doctor_clinic',$clinic->id) }}" class="btn btn-primary hvr-bounce-to-right"style="z-index: 50;">see more</a>
          </div>
        </div>
      </div>

      @endforeach

     

   

<!-- /////////////////////////////////////////////////////////the end////////////////////////////////////////////////////////////// -->
<div class="text-center bg-dark w-100">
  <a href="https://maps.app.goo.gl/cnDTQJfWcGqixUaG9"><img class="imgfinsh" src="image/syria.jpg" alt="shein" width="200" height="100px"></a><br>
  <a href="#"><i class="fab fa-facebook-square fs-1"></i></a>
  <a href="#"><i class="fab fa-twitter-square fs-1"></i></a>
  <a href="#"><i class="fab fa-instagram-square fs-1"></i></a>
  <a href="#"><i class="fab fa-whatsapp-square fs-1"></i></a>
  <a href="#"><i class="fab fa-google-plus-square fs-1"></i></a>
  <p class="text-white">COPYRIGHT &copy; 2024 . ALL RIGHT RESERVED By Sehati website</p>
</div><!--finsh-->





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>