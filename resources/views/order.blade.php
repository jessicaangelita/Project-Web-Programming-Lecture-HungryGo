@extends('template')

@section('title', 'create menu')

@section('body')

@if ($orders!=null)
@foreach ($orders as $order)
@foreach ($order->OrderDetails as $OrderDetail)
<div class="card mb-3 m-5">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('storage/menus/'.$OrderDetail->Menu->image)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Nama Item: {{$OrderDetail->Menu->name}}</h5>
          <p class="card-text">Quantity: {{$OrderDetail->quantity}}</p>
          <p class="card-text">Total harga: {{$OrderDetail->quantity * $OrderDetail->Menu->price}}</p>
          <p class="card-text">Status: {{$OrderDetail->status->name}}</p>
          @can('admin')
          @if ($OrderDetail->status->name != 'Done')
          <form action="/changestatus/{{$OrderDetail->id}}" method="POST">
            @csrf
            @method('patch')
            <button class="btn btn-primary">
                done
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
