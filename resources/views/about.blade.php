@extends('template')

@section('title', 'About')

@section('body')
    <div class="container-fluid px-0">
        <div class="pt-sm-5">
            <div class="position-relative">
                <img src="./images/page_title_bg.png" alt="Pizza" class="img-fluid">
                <h1 class="title text-yellow position-absolute center-of-image">About</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container full-screen py-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <img src="./images/chef.png" alt="Chef 1" class="img-fluid">
                </div>
                <div class="col-md-6 text-black">
                    <h1 class="title text-black">Your Loved Food</h1>
                    <h1 class="title text-yellow">Made Gold Hands!</h1>
                    <div class="row mt-3">
                        <div class="col-12">
                            <p class="short-about-us">
                                HUNGRYGO - A restaurant where you are completely full. All dishes - author's and gastronomic - are created according to the principle of interesting and complex combinations of ingredients. The menu is updated monthly so that guests can enjoy seasonal products, which are also served in a very creative way. Pizzas, drinks, soups, desserts - we cook all this with a soul, just for you!
                                <br>
                                We are not just an eatery, we are a whole story. Ups and downs, get on the right track so you can enjoy our delicious food. You can visit our restaurant on:
                                <br>
                                Jl. Raya Kb. Jeruk No. 27, RT. 1 / RW. 9, Kel. Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-gray">
        <div class="container full-screen py-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-black">
                    <h1 class="title text-brown">In Your Stomach</h1>
                    <h1 class="title text-black">In Our Soul</h1>
                    <div class="row mt-3">
                        <div class="col-12">
                            <p class="short-about-us">
                                We approach each dish as something new in our lives, we will be sincerely happy if we see you in our restaurant again. Our task is to fall in love with your stomachs, which we will spoil every tome you visit the restaurant.
                            </p>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <p class="bar-title mb-2">Happy Customers</p>
                            <p class="bar-title mb-2">89%</p>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="bar-container p-0">
                                <div class="bar bar-89"></div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <p class="bar-title mb-2">Professional Service</p>
                            <p class="bar-title mb-2">92%</p>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="bar-container p-0">
                                <div class="bar bar-92"></div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <p class="bar-title mb-2">Proper Equipment</p>
                            <p class="bar-title mb-2">83%</p>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="bar-container p-0">
                                <div class="bar bar-83"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./images/chef_cook.png" alt="Chef 2" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-red">
        <div class="container full-screen py-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-white">
                    <h1 class="title text-white">The Best Food</h1>
                    <h1 class="title text-yellow">In Town</h1>
                    <div class="row mt-3">
                        <div class="col-10">
                            <p class="short-about-us">
                                Haute cuisine is not expensive delicacies. This is philosophy. Chef Dilan Cepmek received authentic Italian - Indonesian food, boldly and delicately playing some recipes in his own way. This is how delicious Italian food appears on your table.
                                <ul class="short-about-us">
                                    <li>The best sauces, toppings in pizzas</li>
                                    <li>Delicious soups, with gastronomic additions</li>
                                    <li>Fresh products, ingredients in dishes</li>
                                    <li>Soft, airy, quality desserts</li>
                                    <li>Crispy pizza tops</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <a class="btn long-btn btn-black" href="https://web.whatsapp.com/" role="button">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./images/pizza_top.png" alt="Pizza" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection