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
        <!-- /////////////////////////////////////////////////////////////// -->

    <section></section>

        <div style="width:100%;height: 150px;"></div>
  <h2 class="text-center text-primary fs-1">APPOINTMENTS</h2>
  <hr style="height: 2px;background-color: rgb(0, 0, 0);">
  <table class="table fs-4" style="margin-bottom:200px;">
    <thead>
      <tr class="fs-2">
        <th scope="col">Image</th>
        <th scope="col">Name of product</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Name Of Patient</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($carts as $cart )
        
      <tr>
        <td><img src="{{ asset($cart->medicines->image) }}" alt="" style="width: 60px;hight:60px;"></td>
        <td>{{ $cart->medicines->name }}</td>
        <td>{{ $cart->medicines->price }}</td>
        <td>{{ $cart->quantity }}</td>
        <td>{{ $cart->users->first_name }}&nbsp;{{ $cart->users->last_name }}</td>
        <td>{{ $cart->status }}</td>
        <td> @if ($cart->status == 'pending') <a href="{{ route('accept_cart',$cart->id) }}"><button class="bg-warning" style="border-radius: 5px;width: 85px;">accept</button></a>
            <a href="{{ route('refuse_cart',$cart->id) }}"><button class="bg-warning" style="border-radius: 5px;width: 85px;">refuse</button></a>
            <a href="{{ route('delete_cart',$cart->id) }}"><button class="bg-warning" style="border-radius: 5px;width: 85px;">delete</button></a>
            @else
            <a href="{{ route('delete_cart',$cart->id) }}"><button class="bg-warning" style="border-radius: 5px;width: 85px;">delete</button></a>
            @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


</body>