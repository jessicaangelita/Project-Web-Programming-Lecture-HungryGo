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
                @auth
                    <li class="nav-item me-5">
                        <a class="nav-link text-white active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    @can('admin')
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="/createmenu">Create Menu</a>
                        </li>
                    @elsecan('member')
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="/cart">Cart</a>
                        </li>
                    @endcan
                    <li class="nav-item me-5">
                        <a class="nav-link text-white" href="/ordermenu">Order</a>
                    </li>
                @else
                    <li class="nav-item me-5">
                        <a class="nav-link text-white active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-white" aria-current="page" href="/about">About</a>
                    </li>
                @endauth
            </ul>
            @if (Route::has('login'))
                @auth
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-black">Log Out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link me-5 mb-3 mb-lg-0 text-white">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link me-5 mb-3 mb-lg-0 text-white">Register</a>
                    @endif

                    <a class="nav-link mb-2 mb-lg-0" href="https://web.whatsapp.com/">
                        <div class="d-flex flex-row">
                            <img src="./images/delivery_logo.png" alt="Delivery Logo" height="48" class="me-2">
                            <div class="d-flex flex-column">
                                <span class="text-yellow">Fast delivery</span>
                                <span class="text-white">(+62) 811233</span>
                            </div>
                        </div>
                    </a> 
                @endauth
            @endif         
        </div>
    </div>
</nav>