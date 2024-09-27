<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>
<body>

 <!-- ///////////////////////////////////head///////////////////////////////////////////////////////// -->

 @include('patient.components.navbar')
 
<div style="height: 150px;width: 100%;"></div>
<!-- ///////////////////////////////////////العيادات/////////////////////////////////// -->
<h2 class="text-center fs-1"style="color: rgb(200, 146, 47);">Available clinic specialties</h2>
<hr class="hvr-grow-shadow" style="width: 500px;height: 5px;background-color: rgba(193, 123, 3, 0.864); margin-left: 470px;margin-bottom: 100px;">

<div class="container" style="margin-top: 20px;">
    <div class="row">
    <div class="col-lg-4 my-3">
      <a href="{{ route('get_special_clinics','dental') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;">
          <img src="image/teath.jpg" class="card-img-top" alt="omar-hasan">
          <div class="card-body">
            <h5 class="card-title">Dental clinic</h5>
            <p class="card-text "style="line-height:30px">
                Go book your appointment at the dental's  clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
           
          </div>
        </div>
      </div></a>
      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','women') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;">
          <img src="image/woman.jpg" class="card-img-top" alt="dr.child">
          <div class="card-body">
            <h5 class="card-title">Women's clinic</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the women's clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
           
          </div>
        </div>
      </div></a>
      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','cosmetic') }}"style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;">
          <img src="image/cosmetic2.jpg" class="card-img-top" alt="dr.beautiful">
          <div class="card-body">
            <h5 class="card-title">Cosmetic clinic</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the cosmetic clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
           
          </div>
        </div>
      </div></a>
      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','children') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;;margin-top: 100px;">
          <img src="image/child.jpg" class="card-img-top" alt="dr.teath">
          <div class="card-body">
            <h5 class="card-title">Children's Clinic</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the pediatric clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
            
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','eye') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/eye.jpg" class="card-img-top" alt="eye">
          <div class="card-body">
            <h5 class="card-title">Eye clinic</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the eye clinic that suits you.<br>Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
           
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','ear_nose_and_throat') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/aer.webp" class="card-img-top" alt="dr.teath">
          <div class="card-body">
            <h5 class="card-title">Ear, nose and throat clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the ear clinic that suits you.<br> Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
         
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','dermatology') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/Dermatology clinics.jpg" class="card-img-top" alt="Add image">
          <div class="card-body">
            <h5 class="card-title">Dermatology clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the dermatology clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
          
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','x-ray') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/X-ray clinics.jpg" class="card-img-top" alt="Add image">
          <div class="card-body">
            <h5 class="card-title">X-ray clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the  X-ray clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
         
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
       <a href="{{ route('get_special_clinics','psychiatric') }}" style="text-decoration: none;color: black;"></a>
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/Psychiatric clinics.jpeg" class="card-img-top" alt="Add image">
          <div class="card-body">
            <h5 class="card-title">Psychiatric clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the Psychiatric clinic that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
          
          </div>
        </div>
      </div></a>

      
      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','orthopedic_surgery') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/Orthopedic surgery.jpg" class="card-img-top" alt="Add image">
          <div class="card-body">
            <h5 class="card-title">Orthopedic surgery clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the surgery clinics that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
          
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
        <a href="{{ route('get_special_clinics','physical_therapy') }}" style="text-decoration: none;color: black;">
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/Physical therapy.jpg" class="card-img-top" alt="Add image">
          <div class="card-body">
            <h5 class="card-title">Physical therapy clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the Physical therapy clinics that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
         
          </div>
        </div>
      </div></a>

      <div class="col-lg-4 my-3">
       <a href="{{ route('get_special_clinics','forensic') }}" style="text-decoration: none;color: black;"></a>
        <div class="card hvr-grow-shadow" style="width:300px;height: 350px;margin-top: 100px;">
          <img src="image/Forensic clinics.jfif" class="card-img-top" alt="Add image">
          <div class="card-body">
            <h5 class="card-title">Forensic clinics</h5>
            <p class="card-text"style="line-height:30px">
                Go book your appointment at the Forensic clinics that suits you. Choose your doctor from here <i class="fab fa-opencart" style="color: #db8f0a;font-size:19px;margin: 3px 0px 0px 12px;"></i>
            </p>
          
          </div>
        </div>
      </div></a>

    </div>
  </div>
<!-- //////////////////////////////////////////////////////////////////////////////////// -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>   
</body>
</html>