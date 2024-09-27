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
  
  <nav class="navbar navbar-expand-lg navbar-light bg-dark position-fixed w-100" style="z-index: 2;opacity: 0.8;" >
    <div class="container-fluid">
      <img src="image/logo.png" alt="logo" width="110" height="70">
      <a class="navbar-brand ms-3 hvr-float-shadow text-warning fs-2" href="{{ route('login') }}">Home</a>
      
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('about') }}"
               aria-expanded="false">
              About
            </a>
           
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('login') }}" id="navbarDropdown" 
               aria-expanded="false">
              Clinics
            </a>
           
          </li>
         
          
        <form class="d-flex">

          <ul id="links"><a href="{{ route('register') }}"><button class="btn btn-warning fs-4  hvr-grow" style="margin-left:840px;" type="button">Sign up</button></a></ul>
          <ul id="links"><a href="{{ route('login') }}"><button class="btn btn-warning fs-4  hvr-grow" style="margin-left:10px;" type="button">Sign in</button></a></ul>
         

         

        </form>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////carousel///////////////////////////////////////////////////////////////*/ -->


  <div id="carouselExampleControls" class="carousel slide w-100 m-auto" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active ratio ratio-21x9">
        <img src="image/booking.jpg" class="d-block w-100" alt="booking">
        <div class="carousel-caption d-none d-md-block" style="margin-top: 30rem;">
          <h5 class="text-dark">Welcome to the medical clinic reservation website</h5>
          <a href="{{ route('login') }}"><button class="hvr-radial-out">Go To Book</button></a>
        </div>
      </div>
      <div class="carousel-item ratio ratio-21x9">
        <img src="image/teath.jpg" class="d-block w-100" alt="teath">
        <div class="carousel-caption d-none d-md-block" style="margin-top: 30rem;">
          <h4 class="text-dark">Book a dental clinic</h4>
          <a href="{{ route('login') }}"><button class="hvr-radial-out">Go To Book</button></a>
        </div>
      </div>
      <div class="carousel-item ratio ratio-21x9">
        <img src="image/child.jpg" class="d-block w-100" alt="child">
        <div class="carousel-caption d-none d-md-block" style="margin-top: 30rem;">
          <h4 class="text-dark">Book a clinic for children’s diseases and needs</h4>
          <a href="{{ route('login') }}"><button class="hvr-radial-out">Go To Book</button></a>
        </div>
      </div>
      <div class="carousel-item ratio ratio-21x9">
        <img src="image/cosmetic.jpg" class="d-block w-100" alt="cosmetic">
        <div class="carousel-caption d-none d-md-block" style="margin-top: 30rem;">
          <h4 class="text-dark">Book your beauty clinic, ma'am</h4>
          <a href="{{ route('login') }}"><button class="hvr-radial-out">Go To Book</button></a>
        </div>
      </div>
      <div class="carousel-item ratio ratio-21x9">
        <img src="image/eye.jpg" class="d-block w-100" alt="eye">
        <div class="carousel-caption d-none d-md-block" style="margin-top: 30rem;">
          <h4 class="text-dark">Book a clinic for eye examination and surgery</h4>
          <a href="{{ route('login') }}"><button class="hvr-radial-out">Go To Book</button></a>
        </div>
      </div>
      <div class="carousel-item ratio ratio-21x9">
        <img src="image/woman.jpg" class="d-block w-100" alt="woman">
        <div class="carousel-caption d-none d-md-block" style="margin-top: 30rem;">
          <h4 class="text-dark">Book a clinic for feminine supplies</h4>
          <a href="{{ route('login') }}"><button class="hvr-radial-out">Go To Book</button></a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- ///////////////////////////////////////////////card///////////////////////////////////////////// -->
<h2 class="text-center fs-1" style="margin-top: 150px;color:rgb(219, 142, 0)">Doctors participating on the site</h2>
<hr class="hvr-grow-shadow" style="width: 300px; height: 5px; margin-left: 550px;background-color: rgba(193, 123, 3, 0.864); " >
  <div class="container" style="margin-top: 20px;">
    <div class="row">

      @if ($clinics)
      
      @foreach ( $clinics as $clinic )
        
      <div class="col-lg-4 my-3">
        <div class="card hvr-grow-shadow cover" style="width: 18rem;">
          <img src="{{ asset($clinic->users->image) }}" class="card-img-top" alt="{{ $clinic->users->first_name }}">
          <div class="card-body">
            <h5 class="card-title">Dr.{{ $clinic->users->first_name }}{{ $clinic->users->last_name }}</h5>
            <i class="fas fa-user text-warning"></i>
            <span> {{ $clinic->medical_specialty }}</span>
            &nbsp;
            &nbsp;
            <i class="far fa-clock text-warning"></i>
            <span>{{ $clinic->inspection_time }}</span>
            &nbsp;
            &nbsp;
            <i class="fas fa-comments text-warning"></i>
            <span>{{ $clinic->number_of_booking_times }}</span>
            <p class="card-text">{{ $clinic->description }}
            </p>
            <a href="{{ route('login') }}" class="btn btn-primary hvr-bounce-to-right"style="z-index: 50;">see more</a>
          </div>
        </div>
      </div>

      @endforeach

      @endif
      
    </div>
  </div>
<!-- /////////////////////////////عدد المستخدمين والمستفيدين/////////////////////// -->

<div class="w-100 position-relative" style="height: 50vh; background-image: url(image/animated-dna-clipart-2.gif);margin-top: 200px;">
  <div class="position-absolute w-100 h-100" style="background-color: rgba(0, 0,0,0.7);">
      <div class="w-75 position-absolute"style=" margin:100px 0px 0px 130px;">
      <div class="float-start text-warning"style="margin-left:120px">
          <i class="fas fa-users fs-1"></i>
          <p><b>11451</b><br>Number of followers</p>
      </div>
      <div class="float-start text-warning"style="margin-left:120px">
          <i class="far fa-smile fs-1"></i>
          <p><b>12567</b><br>happy clients</p>
      </div>
      <div class="float-start text-warning"style="margin-left:120px">
          <i class="fas fa-share fs-1"></i>
          <p><b>2500</b><br>Number of participants</p>
      </div>
      <div class="float-start text-warning"style="margin-left:120px">
          <i class="fas fa-users-cog fs-1"></i>
          <p><b>1</b><br>Years </p>
      </div>
      </div><!--conteny-->
  </div><!--overlay-->
</div><!--image-->



<!-- //////////////////////////////////////why chose us////////////////////////////// -->
<div class="bigdiv">
  <div class="smoll">
  <h2>Why Choose Us</h2>
  <hr>
  <p>Because our website is easy to use, it makes it easier for the patient to book appointments and for the doctor to receive his patients in the optimal manner</p>
  <i class="far fa-check-circle"></i><span>Book appointments in clinics with the doctor of your choice</span><br><br>
  <i class="far fa-check-circle"></i><span>You can reserve the products you need from the clinic</span><br><br>
  <i class="far fa-check-circle"></i><span>The doctor can poll the list of his subscribed patients</span><br><br>
  <i class="far fa-check-circle"></i><span>There is also a notification bell for emergency situations</span>
  </div>
  <div class="groundimg">
      <img src="image/booking.jpg" alt="image" draggable="false" width="310px" height="450px">
  </div>
  
  </div>
   

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
    <script src="{{  asset('js/script.js') }}"></script>
</body>

</html>