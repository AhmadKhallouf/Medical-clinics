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

<body style="background-image: url(image/background.jpg);">
  
   <!-- ////////////////////////////////////////////head//////////////////////////////// -->

   <nav class="navbar navbar-expand-lg navbar-light bg-dark  w-100" style="opacity: 0.8">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 hvr-float-shadow  fs-1 text-light" href="{{ route('/') }}">Home</a>

        <form class="d-flex">
          <ul id="links">
            <a href="{{ route('register') }}"><button class="btn hvr-grow text-primary fs-4 me-5" style="background-color: rgb(217, 225, 243);" type="button">Sign Up</button></a>
            <a href="{{ route('login') }}"><button class="btn fs-4  hvr-grow text-primary me-5"style="background-color: rgb(217, 225, 243);" type="button">Sign in</button></a>
              </ul>
        </form>
    
    </div>
  </nav>
           
   <div style="width: 500px; height: 600px; border:3px solid black;border-radius: 20px; margin: auto; margin-top: 60px;background:linear-gradient(45deg,#c3f2ff,rgb(119, 147, 195));">
    
    

    <form action="{{ route('login.store') }}" method="POST" class="row g-3 fs-4"style="margin:auto;">
        @csrf
      <div class="col-12">
        <label for="username" class="form-label fw-bold">Email :</label>
        <input type="email" class="form-control" id="username" name="email">
      </div>
      <div class="mb-3">
        <label for="Password" class="form-label ms-3 fw-bold">Password :</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <input type="submit" value="Sign in"  class="btn btn-primary fs-5 mt-3">
    </form>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
    <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="signup.html">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
  </div>
  
</form>
  


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{  asset('js/login.js') }}"></script>
</body>

</html>