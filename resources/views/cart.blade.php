@extends('template')
@section('title', 'Cart')
@section('body')

<p class="display-2 text-center mt-4">Cart</p>

@foreach ($cartHeader->cartDetails as $cartDetail)
<div class="card mb-3 m-5">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('storage/menus/'.$cartDetail->Menu->image)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Nama Item: {{$cartDetail->Menu->name}}</h5>
          <p class="card-text">Quantity: {{$cartDetail->quantity}}</p>
          <p class="card-text">Total harga: {{$cartDetail->quantity * $cartDetail->Menu->price}}</p>
        </div>
      </div>
    </div>
</div>
@endforeach
<form action="">
    <button class="btn btn-primary">Check Out</button>
</form>
@endsection