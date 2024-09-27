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
        <!-- /////////////////////////////////////////////////////////////// -->
        <div style="width:100%;height: 150px;"></div>
  <h2 class="text-center text-primary fs-1">PATIENTS</h2>
  <hr style="height: 2px;background-color: rgb(0, 0, 0);">
  <table class="table fs-4" style="margin-bottom:200px;">
    <thead>
      <tr class="fs-2">
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Age</th>
        <th scope="col">Date Of Inspection</th>
        <th scope="col">Start Inspection</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient )
            
      <tr>
        <td>{{ $patient->users->first_name }} &nbsp; {{ $patient->users->last_name }}</td>
        <td>{{ $patient->users->phone }}</td>
        <td>{{ $patient->users->age }}</td>
        <td>{{ $patient->date_of_inspection }}</td>
        <td>{{ $patient->start_inspection }}</td>
        <td>{{ $patient->status }}</td>
        <td><a href="{{ route('cancellation_of_reservation',$patient->id) }}"><button class="btn btn-danger" style="border-radius: 5px;width: 85px;">cancel</button></a></td>
      </tr>

      @endforeach

    </tbody>
  </table>


</body>