@extends('template')

@section('title', 'Cart')

@section('body')
<div class="container-fluid px-0">
    <div class="pt-sm-5">
        <div class="position-relative">
            <img src="{{ asset('./images/page_title_bg.png') }}" alt="Pizza" class="img-fluid">
            <h1 class="title text-yellow position-absolute center-of-image">Cart</h1>
        </div>
    </div>
</div>

@if ($cartHeader!=null && count($cartHeader->cartDetails)!=0)
    @foreach ($cartHeader->cartDetails as $cartDetail)
        @if ($cartDetail->Menu != null)
        <div class="card mb-3 m-5">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('storage/menus/'.$cartDetail->Menu->image)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body bg-white">
                    <h5 class="card-title" style="font-weight: bold; font-size:30px">{{$cartDetail->Menu->name}}</h5>
                    <p class="card-text">Quantity: {{$cartDetail->quantity}}</p>
                    <p class="card-text" style="margin-top: -2%">Total Price: Rp.{{number_format($cartDetail->quantity * $cartDetail->Menu->price)}}</p>
                    <a href="/editcart/{{$cartDetail->id}}" class="btn btn-red-border" style="width: 25%;">Edit Cart</a>
                    <form method="post" action="/deletecart/{{$cartDetail->id}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-yellow-border mt-2" style="width: 25%;">Delete</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        @endif
    @endforeach
    <form action="/checkout" method="POST">
        @csrf
        <div class="row">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn long-btn btn-red mx-5 mt-2 mb-5">Checkout</button>
            </div>
        </div>
    </form>
@else
    <div class="empty-content">
        <h3>Cart is empty!</h3>
    </div>
@endif
@endsection