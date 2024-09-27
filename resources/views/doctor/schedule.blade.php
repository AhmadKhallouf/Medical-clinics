<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="{{  asset('css/style.css') }}">
    <link rel="stylesheet" href="{{  asset('css/stylecalendar.css') }}">
    <link rel="stylesheet" href="{{  asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{  asset('css/all.css') }}">
</head>
<body>

   <!-- ///////////////////////////////////head///////////////////////////////////////////////////////// -->

@include('doctor.components.navbar')   

<!-- ///////////////////////////////////////////////////////////// -->
<section><div style="width:100%;height: 100px;"></div></section>

<div style="width: 100%;height:50px;margin:50px 0px 10px 0px;color: rgb(220, 139, 17);"><h2 class="text-center">Set my schedule</h2></div>


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
          <button class="today-btn">Today</button>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="today-date">
        <div class="event-day">wed</div>
        <div class="event-date">12th december 2022</div>
      </div>
      <div class="events" style="overflow: auto;">
        @if (isset($dates))
          
        @foreach ($dates as $date )
          
        <div class="event">
          <div class="title">
            <i class="fas fa-circle"></i>
            <h3 class="event-title"></h3> <a href="{{ route('booking_date',[$date->id,$date->date_of_inspection]) }}" class="btn btn-primary" style="pointer-events: auto;">booking</a>
          </div>
          <div class="event-time">
            <span class="event-time">{{ $date->start_inspection }} - {{ $date->end_inspection }}</span>
          </div>
      </div>

      @endforeach

      @endif
      </div>
      <div class="add-event-wrapper">
        <div class="add-event-header">
          <div class="title">Add Event</div>
          <i class="fas fa-times close"></i>
        </div>
        <div class="add-event-body">
          <div class="add-event-input">

            <form action="{{ route('schedule_dates') }}" method="POST">
              @csrf
            <input class="date-send" name="date" type="text" value="" style="display: none;" />
            <input type="text" placeholder="" class="event-name" readonly />
          </div>
          <div class="add-event-input">
            <input
              type="text"
              placeholder="Beginning of work"
              class="event-time-from"
              name="beginning_work"
            />
          </div>
          <div class="add-event-input">
            <input
              type="text"
              placeholder="End of work"
              class="event-time-to"
              name="end_work"
            />
          </div>
        </div>
        <div class="add-event-footer">
          <button type="submit" >Add Event</button>
        </div>
      </form> 
      </div>
    </div>
    <button class="add-event">
      <i class="fas fa-plus-circle"></i>
    </button>
  </div>

 

    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"></script>
   <script src="{{  asset('js/evo-calendar.min.js') }}"></script> 
   <!-- <script src="js/user.js"></script>
   <script src="js/script.js"></script> -->
 
</body>
</html>