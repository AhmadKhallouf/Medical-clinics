<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{  asset('css/style.css') }}">
  <link rel="stylesheet" href="{{  asset('css/hover.css') }}">
  <link rel="stylesheet" href="{{  asset('css/all.css') }}">
</head>

<body>

  <!-- ////////////////////////////////////////////head//////////////////////////////// -->

<section>
    @include('doctor.components.navbar')
</section>


  <div style="height: 150px;width: 100%;"></div>

  
<!-- ////////////////////////////some prodect//////////////////////////////////// -->
<h2 class="text-center fs-1 hvr-wobble-to-top-right" style="margin-top: 150px;color:#a95b9c;margin-left: 420px;">Book the products we recommend</h2>
<hr class="hvr-grow-shadow" style="width: 300px; height: 5px; margin-left: 550px;background-color: #653b5e" >
  <div class="text-center" style="margin-top: 20px;">
    <div class="row">

        @foreach ( $products as $product )
            
      <div class="col-lg-4 my-3">
        <div class="card hvr-grow-shadow cover" style="width:300px;height:400px;">
          <img src="{{ asset($product->image) }}" class="card-img-top" alt="face wash"height="200px">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            
            <p class="card-text">{{ $product->description }}</p>
            <div>{{ $product->quantity }}</div>
            <div>{{ $product->price }}$</div><br>
            <a href="{{ route('update_product_page',$product->id) }}" class="btn hvr-bounce-to-right text-light"style="background-color:#a95b9c;z-index: 30;">Update</a>
            <a href="{{ route('delete_product',$product->id) }}" class="btn hvr-bounce-to-right text-light"style="background-color:#a95b9c;z-index: 30;">Delete</a>
          </div>
        </div>
      </div>

      @endforeach
      
     

     <div style="position: auto;"> <a href="{{ route('add_product_page') }}" class="btn hvr-bounce-to-right text-light"style="background-color:#a95b9c;z-index: 30;">Add product</a> </div>

     
    </div>
  </div>

  <!-- /////////////////////////////////////////////////// -->
  <div class="finsh"style="background-color:#FFCDEA">
    <a href="https://maps.app.goo.gl/7PEHVoQwsVUsEYwPA"><img class="imgfinsh" src="image/omarlocation.jpg" alt="Omar"
        width="200" height="100px"><br></a>
    <a href="#"><i class="fab fa-facebook-square"style="color: #653b5e;"></i></a>
    <a href="#"><i class="fab fa-twitter-square"style="color: #653b5e;"></i></a>
    <a href="#"><i class="fab fa-instagram-square"style="color: #653b5e;"></i></a>
    
    

    <p>COPYRIGHT &copy; 2024 . ALL RIGHT RESERVED BY my health</p>
  </div><!--finsh-->


 


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
    <script src="{{  asset('js/script.js') }}"></script>
    <script src="{{  asset('js/evo-calendar.min.js') }}"></script>
</body>

</html>