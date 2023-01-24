@extends('template')

@section('title', 'Welcome')

@section('body')
    <div class="container-fluid bg-red">
        <div class="container full-screen">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-white">
                    <h1 class="title"><span class="text-yellow">The Best</span> Choice</h1>
                    <h1 class="title">You <span class="text-yellow">Can Have</span></h1>
                    <div class="row mt-3">
                        <div class="col-10">
                            <h5 class="best-seller">Nasi Goreng, Ayam Kalasan, Bebek Bakar, Mie Panggang, Cumi Rica-Rica, Udang Tepung, Sayur Rebus</h5>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            @if (Route::has('login'))
                                @auth
                                    <a class="btn long-btn btn-black" href="{{ url('/dashboard') }}" role="button">Order Now</a>
                                @else
                                    <a class="btn long-btn btn-black" href="{{ route('login') }}" role="button">Order Now</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./images/pizza.png" alt="Pizza" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container full-screen py-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <img src="./images/chef.png" alt="Welcome Pizza" class="img-fluid">
                </div>
                <div class="col-md-6 text-black">
                    <h1 class="title text-black">Your Loved Food</h1>
                    <h1 class="title text-yellow">Made Gold Hands!</h1>
                    <div class="row mt-3">
                        <div class="col-12">
                            <p class="short-about-us">
                                HUNGRYGO - A restaurant where you are completely full. All dishes - author's and gastronomic - are created according to the principle of interesting and complex combinations of ingredients. The menu is updated monthly so that guests can enjoy seasonal products, which are also served in a very creative way. Pizzas, drinks, soups, desserts - we cook all this with a soul, just for you!
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <a class="btn long-btn btn-red" href="/about" role="button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection