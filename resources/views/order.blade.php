@extends('template')

@section('title', 'Order')

@section('body')
  <div class="container-fluid px-0">
      <div class="pt-sm-5">
          <div class="position-relative">
              <img src="{{ asset('./images/page_title_bg.png') }}" alt="Pizza" class="img-fluid">
              <h1 class="title text-yellow position-absolute center-of-image">Order</h1>
          </div>
      </div>
  </div>

  @if ($orders!=null && count($orders)!=0)
    @foreach ($orders as $order)
      @foreach ($order->OrderDetails as $OrderDetail)
        <div class="card mb-5 m-5">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('storage/menus/'.$OrderDetail->Menu->image)}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body bg-white">
                  <h5 class="card-title" style="font-weight:bold; font-size:30px">{{$OrderDetail->Menu->name}}</h5>
                  <p class="card-text">Quantity: {{$OrderDetail->quantity}}</p>
                  <p class="card-text" style="margin-top: -2%">Total harga: Rp.{{number_format($OrderDetail->quantity * $OrderDetail->Menu->price)}}</p>
                  <p class="card-text text-red">Status: {{$OrderDetail->status->name}}</p>
                  @can('admin')
                    @if ($OrderDetail->status->name != 'Done')
                      <form action="/changestatus/{{$OrderDetail->id}}" method="POST">
                        @csrf
                        @method('patch')
                        <button class="btn btn-red">
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
  @else
    <div class="empty-content">
      <h3>No orders yet!</h3>
    </div>
  @endif
  @if (count($orders)==1 && auth()->user()->isCustomer==null)
    <div class="empty-content">
      <h3>No orders yet!</h3>
    </div>
  @endif
@endsection