<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HungryGo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,500;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Own CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/img_logo.png">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-red">
        <div class="container">
            <a href="/" class="navbar-brand me-5 py-0">
                <img src="./images/img_logo.png" alt="HungryGo's Logo" height="32">
                <img src="./images/text_logo.png" alt="HungryGo's Logo" height="32">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list list-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link text-white active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-white" aria-current="page" href="/about">About</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link me-5 mb-3 mb-lg-0 text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link me-5 mb-3 mb-lg-0 text-white">Register</a>
                        @endif
                    @endauth
                @endif
                <a class="nav-link mb-2 mb-lg-0" href="/">
                    <div class="d-flex flex-row">
                        <img src="./images/delivery_logo.png" alt="Delivery Logo" height="48" class="me-2">
                        <div class="d-flex flex-column">
                            <span class="text-yellow">Fast delivery</span>
                            <span class="text-white">(+62) 811233</span>
                        </div>
                    </div>
                </a>                
            </div>
        </div>
    </nav>

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

    <footer class="bg-black text-white">
        <div class="container py-3">
            <div class="row d-flex align-items-center">
                <div class="col-6">
                    <div class="d-flex">
                        <img src="./images/img_logo.png" alt="HungryGo's Logo" height="48">
                        <img src="./images/text_logo.png" alt="HungryGo's Logo" height="48">
                    </div>
                    <p class="short-about-us mt-2 mb-0">HUNGRYGO - A restaurant where you will completely eat up.</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="https://www.instagram.com/binusuniversityofficial/" class="social-media ms-5"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/universitasbinanusantara/" class="social-media ms-5"><i class="bi bi-facebook"></i></a>
                    <a href="https://twitter.com/binus_univ" class="social-media ms-5"><i class="bi bi-twitter"></i></a>
                </div>
            </div>
            <p class="copyright text-center mt-2 mb-0">&copy; 2023 HUNGRYGO, All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>