<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr {{ $clinic->users->first_name }}&nbsp;{{ $clinic->users->last_name }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{  asset('css/style.css') }}">
    <link rel="stylesheet" href="{{  asset('css/stylecalendar.css') }}">
    <link rel="stylesheet" href="{{  asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{  asset('css/all.css') }}">
</head>

<body>

  <!-- ////////////////////////////////////////////head//////////////////////////////// -->

 <section>
    @include('patient.components.navbar')
 </section>

 <div style="height: 100px;width: 100%;">
</div>

  <div style="height: 150px;width: 100%;">
    <img src="{{ asset($clinic->users->image) }}" class="card-img-top" alt="{{ $clinic->users->first_name }}-{{ $clinic->users->last_name }}" style="margin-left: 1200px;margin-top:15px;margin-bottom:15px;width:120px;height: 120px" >
  </div>


  <!-- //////////////////////////////// description//////////////////////////////////// -->


  <div class="accordion" id="accordionPanelsStayOpenExample" style="margin: 0px 0px 80px 0px;">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button fs-2" type="button" data-bs-toggle="collapse"
          data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Doctor {{ $clinic->users->first_name }}&nbsp;{{ $clinic->users->last_name }} clinic &nbsp; <i class="fas fa-user-md" style="color: #b87fae;"></i>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
        aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body" style="font-size:22px;letter-spacing:2px;">
          <strong>A {{ $clinic->medical_specialty }} clinic,</strong> {{ $clinic->description }}
        </div>
      </div>
    </div>

  </div>
  <!-- ////////////////////////////////////////////price list////////////////// -->
  <h2 class="text-center fs-1"style="color: #a95b9c;">price list</h2>
  <table class="table table-hover table-bordered fs-4" style="margin-bottom:200px;border:#a95b9c">
    <thead>
      <tr class="fs-2">
        <th scope="col">#</th>
        <th scope="col">Action</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach ( $clinic->costs as $cost )
            
      <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{ $cost->name_of_element }}</td>
        <td>{{ $cost->cost }} &nbsp; $</td>
      </tr>
      <?php $i++ ?>
      @endforeach

      
    </tbody>
  </table>










  <!-- /////////////////////////////////////////////booking////////////////////////////////// -->


  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example text-center"
    tabindex="0">
    <h2 class="hvr-float-shadow fs-1"style="color: #a95b9c;">For reservations</h2>
  </div>
  
 
  <div class="container">
    <div class="left">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">december 2015</div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
        <div class="goto-today">
          <div class="goto">
            <input type="text" placeholder="mm/yyyy" class="date-input" />
            <button class="goto-btn">Go</button>
          </div>
          <button type="submit" class="today-btn">today</button>
        </form>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="today-date">
        <div class="event-day">wed</div>
        <div class="event-date">12th december 2022</div>
      </div>
      <div class="events"></div>
      <div class="add-event-wrapper">
        <div class="add-event-header">
          <div class="title">Add Event</div>
          <i class="fas fa-times close"></i>
        </div>
        <div class="add-event-body" style="">
          <div class="add-event-input">
            <input type="text" placeholder="" class="event-name" readonly style="display:none;" />
          </div>
          <div class="add-event-input" style="display:none;">
            <input
              type="text"
              placeholder="Beginning of work"
              class="event-time-from"
              name="beginning_work"
            />
          </div>
          <div class="add-event-input" style="display:none;">
            <input
              type="text"
              placeholder="End of work"
              class="event-time-to"
              name="end_work"
            />
          </div>
        </div>
        <div class="add-event-footer" style="">
          <form action="{{ route('reservation_date_page',$clinic->id) }}" method="POST">
            @csrf
            <input class="date-send" name="date_of_inspection" type="text" value="" style="display: none;" >
            <button type="submit" style="">view</button>
        </form>
        </div>
      </div>
    </div>
    <button class="add-event" style="" >
      <i class="fas fa-plus-circle"></i>
    </button>
  </div>
          
  </div>

          
 
  </div>
 <!-- //////////////////////danger/////////// -->
 {{-- <div style="width: 900px;height: 400px;    background:linear-gradient(45deg,#bda5ff,rgb(148, 238, 232));margin:120px 0px 0px 50px;font-size: 30px;border:2px solid blue;border-radius:10px ;">
  <p style="text-align: center;"><b  style="color: rgb(114, 6, 176);">Important note : </b>If you are suffering from severe, unbearable pain, send me a message and we will respond as quickly as possible to book your appointment.</p>
  <label for="exampleFormControlTextarea1" class="form-label m-3">Description of your illness :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write here"
              required></textarea>
              <button class="hvr-shrink" style="border:2px solid blue;border-radius: 10px;width: 150px;margin:10px 0px 0px 20px;color: blue;">Send</button>
 </div> --}}

  <!-- ////////////////////////////////////////some work//////////////////////////////////////// -->
<div>
  <h2 style="margin-top: 150px; text-align: center;color: #a95b9c;">Some Work</h2>
  <hr style="width: 360px; height: 5px; margin:0px 0px 50px 560px;background-color: #653b5e;">

  <div class="fs-1" style="float: left;margin-left: 1050px;margin-top: 150px;">
    <p>Before and after therapy</p>
  </div>

  <div class="somework4">
    <div class="divfront4" style="background-image: url({{ $clinic->workImages[0]->image_before }});"></div>
    <div class="divback4" style="background-image: url({{ $clinic->workImages[0]->image_after }})"></div>
  </div>
  <div class="fs-1" style="float: left;margin-left: 1050px;margin-top: 150px;">
    <p>Before and after therapy </p>
  </div>


  <div class="somework5">
    <div class="divfront5"  style="background-image: url({{ $clinic->workImages[1]->image_before }});"></div>
    <div class="divback5" style="background-image: url({{ $clinic->workImages[1]->image_after }});"></div>
  </div>

</div>
<!-- ////////////////////////////some prodect//////////////////////////////////// -->
<h2 class="text-center fs-1 hvr-wobble-to-top-right" style="margin-top: 150px;color:#a95b9c;margin-left: 420px;">Book the products we recommend</h2>
<hr class="hvr-grow-shadow" style="width: 300px; height: 5px; margin-left: 550px;background-color: #653b5e" >
  <div class="text-center" style="margin-top: 20px;">
    <div class="row">

        @foreach ( $clinic->medicines as $medicine )

      <div class="col-lg-4 my-3">
        <div class="card hvr-grow-shadow cover" style="width:300px;height:400px;">
          <img src="{{ asset($medicine->image) }}" class="card-img-top" alt="face wash"height="200px">
          <div class="card-body">
            <h5 class="card-title">{{ $medicine->name }}</h5>
            
            <p class="card-text">{{ $medicine->description }}</p><br>
            <span class="text-primary fs-5">price: </span>{{ $medicine->price }}$ &nbsp;<span class="text-primary fs-5">quantity: </span>{{ $medicine->quantity }}<br>
              <form action="{{ route('add_product',[$medicine->id,$clinic->id]) }}" method="POST">
                @csrf
            <button type="submit" class="btn hvr-bounce-to-right text-light"style="background-color:#a95b9c;z-index: 30;">Add to cart</button>
            <input type="number" name="quantity"  style="margin-left: 100px; width:40px;" />
              </form>
          </div>
        </div>
      </div>

      @endforeach
     
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