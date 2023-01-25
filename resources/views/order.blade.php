@extends('template')

@section('title', 'Order')

@section('body')

<div class="container-fluid px-0">
    <div class="pt-sm-5">
        <div class="position-relative">
            <img src="./images/page_title_bg.png" alt="Pizza" class="img-fluid">
            <h1 class="title text-yellow position-absolute center-of-image">Order</h1>
        </div>
    </div>
</div>


@if ($orders!=null)
@foreach ($orders as $order)
@foreach ($order->OrderDetails as $OrderDetail)
<div class="card mb-3 m-5">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('storage/menus/'.$OrderDetail->Menu->image)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="background-color:rgb(223, 219, 219)">
          <h5 class="card-title" style="font-weight:bold; font-size:30px">{{$OrderDetail->Menu->name}}</h5>
          <p class="card-text">Quantity: {{$OrderDetail->quantity}}</p>
          <p class="card-text" style="margin-top: -2%">Total harga: {{$OrderDetail->quantity * $OrderDetail->Menu->price}}</p>
          <p class="card-text" style="font-size: 20px; color:red">Status: {{$OrderDetail->status->name}}</p>
          @can('admin')
          @if ($OrderDetail->status->name != 'Done')
          <form action="/changestatus/{{$OrderDetail->id}}" method="POST">
            @csrf
            @method('patch')
            <button class="btn btn-xl btn-dark btn-outline-danger">
                Done
            </button>
        </form>
          @endif
          @endcan

        </div>
      </div>
    </div>
</div>
@endforeach
@endforeach

@endif
@endsection
