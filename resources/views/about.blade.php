<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-dark position-fixed w-100" style="z-index: 2;opacity: 0.8;" >
        <div class="container-fluid">
          <img src="image/logo.png" alt="logo" width="110" height="70">
          <a class="navbar-brand ms-3 hvr-float-shadow text-warning fs-2" href="{{ route('login') }}">Home</a>
        
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('about') }}" aria-expanded="false">
                  About
                </a>
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('login') }}"  aria-expanded="false">
                  Clinics
                </a>
              
              </li>
             

            

             
              
            <form class="d-flex">
    
              <ul id="links"><a href="{{ route('login') }}"><button class="btn btn-warning fs-4  hvr-grow" style="margin-left:820px;" type="button">Sign in</button></a></ul>
          
              
            
                
    
            </form>
          </div>
          
        </div>
        
      </nav>
      
    
    <div style="height: 50px;width: 100%;"></div>
    <!-- //////////////////////////////////////////////////////////////////////////////////////// -->
    <h2 class="text-center display-3 hvr-float-shadow" style="margin:100px 130px 0px 200px; color: rgb(200, 146, 47);">Welcome to the medical clinic reservation website <i class="fas fa-heart" style="color: #c16701;"></i></h2>
<div style="margin:80px 0px 0px 50px; width:75%;font-size: 25px;"><p>This site is dedicated to booking medical clinics to help doctors and patients save time and effort... If you are a patient, enter the patient portal and choose the clinic you need to book your appointment.
    If you are a doctor, go to the doctors portal and subscribe with us to add your clinic to follow up on the conditions of your patients.</p></div>
    <!-- ///////////////////////////////////////////////dispration///////////////////////////////////////////////////// -->

<h2 class="text-center fs-1" style="margin-top: 150px;color:rgb(219, 142, 0)">The importance of electronic reservation</h2>
<hr class="hvr-grow-shadow" style="width: 300px; height: 5px; margin-left: 550px; background-color: rgb(162, 90, 7);" >

<div class="container" style="margin-top: 50px;">
  <div class="row">
  <div class="col-4">
    <div class="card" style="width: 18rem;">
      <img src="image/one.jfif" class="card-img-top w-100" alt="one" style="height: 250px;">
      <div class="card-body">
        <h5 class="card-title" style="color: rgb(206, 134, 0);">Make appointment</h5>
        <p class="card-text">Taking an appointment online provides a lot of convenience in knowing how to book.....</p>
        <p>
          <button class="btn btn-primary  hvr-bubble-float-right" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"style="background-color: rgb(255, 222, 156);color: rgb(126, 73, 3);">
            Reed more
          </button>
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body"style="background-color: rgb(255, 222, 156);">
            Go to the bar above and choose the appropriate clinic for you. Enter the page and enter your information to book an appointment as soon as possible.
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-4">
  <div class="card" style="width: 18rem;">
    <img src="image/tow.jpg" class="card-img-top" alt="tow" style="height: 250px;">
    <div class="card-body">
      <h5 class="card-title" style="color: rgb(206, 134, 0);" >Take Treatment</h5>
      <p class="card-text">If you are sick, do not neglect your health to know the details of treatment......</p>
      <p>
        <button class="btn btn-primary  hvr-bubble-float-right" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample" style="background-color: rgb(255, 222, 156);color: rgb(126, 73, 3);">
          Reed more
        </button>
      </p>
      <div class="collapse" id="collapseExample2">
        <div class="card card-body"style="background-color: rgb(255, 222, 156);">
          Go to the doctor's page you need to prescribe a suitable medication
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-4">
  <div class="card" style="width: 18rem;">
    <img src="image/three.jfif" class="card-img-top" alt="three"style="height: 250px;">
    <div class="card-body">
      <h5 class="card-title" style="color: rgb(206, 134, 0);">Registration</h5>
      <p class="card-text">Welcome, do not forget to register on the site as part of the steps.....</p>
      <p>
        <button class="btn btn-primary hvr-bubble-float-right" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"style="background-color: rgb(255, 222, 156);color: rgb(37, 37, 122);">
          Reed more
        </button>
      </p>
      <div class="collapse" id="collapseExample3">
        <div class="card card-body"style="background-color: rgb(255, 222, 156);">
          1. Click on “Log in” from the bar above<br>
          2. Enter your email and password, then the message “Success” appears.
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
</div>


      
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>