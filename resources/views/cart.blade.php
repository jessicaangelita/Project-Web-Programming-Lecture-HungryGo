@extends('template')
@section('title', 'Cart')
@section('body')

<div class="container-fluid px-0">
    <div class="pt-sm-5">
        <div class="position-relative">
            <img src="./images/page_title_bg.png" alt="Pizza" class="img-fluid">
            <h1 class="title text-yellow position-absolute center-of-image">Cart</h1>
        </div>
    </div>
</div>


@if ($cartHeader!=null)
    @foreach ($cartHeader->cartDetails as $cartDetail)
        @if ($cartDetail->Menu != null)
        <div class="card mb-3 m-5">
            <div class="row g-0 center-content" style="background-color:rgb(223, 219, 219)">
            <div class="col-md-4">
                <img src="{{asset('storage/menus/'.$cartDetail->Menu->image)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold; font-size:30px">{{$cartDetail->Menu->name}}</h5>
                    <p class="card-text">Quantity: {{$cartDetail->quantity}}</p>
                    <p class="card-text" style="margin-top: -2%">Total harga: Rp.{{$cartDetail->quantity * $cartDetail->Menu->price }}</p>
                    <a href="/editcart/{{$cartDetail->id}}" class="btn btn-red" style="border-radius:2px">Edit cart</a>
                    <form method="post" action="/deletecart/{{$cartDetail->id}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-xl btn-dark btn-outline-danger mt-2">Delete</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        @endif
    @endforeach

    <form action="/checkout" method="POST">
        @csrf
        <button class="btn btn-red mt-3 mb-3 m-5" style="border-radius: 4px; font-size:20px">Check Out</button>
    </form>
@else
    <div class="empty-content">
        <h3>Cart is empty!</h3>
    </div>
@endif
@endsection
