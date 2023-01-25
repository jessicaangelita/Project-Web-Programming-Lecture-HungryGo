<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HungryGo | Register</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="icon" href="./images/img_logo.png">
  </head>

    <body>
        <x-guest-layout>
            <x-auth-card>
                <x-slot name="logo">
                    <a href="/" class="navbar-brand me-10 py-0 md-5">
                        <img src="./images/img_logo.png" alt="HungryGo's Logo" height="32" width="100px">
                        <img src="./images/text_logo.png" alt="HungryGo's Logo" height="32" width="100px">
                    </a>
                </x-slot>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="login-register-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="register">
                        <div class="panel">
                            <!-- Name -->
                            <div class="login-input-field">
                                <i class="fas fa-user"></i>
                                <x-input id="name" class="block mt-1 w-full" placeholder="Name" type="text" name="name" :value="old('name')" required />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4 login-input-field">
                                <i class="fas fa-envelope"></i>
                                <x-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4 login-input-field">
                                <i class="fas fa-lock"></i>
                                <x-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4 login-input-field">
                                <i class="fas fa-lock"></i>
                                <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password" type="password" name="password_confirmation" required />
                            </div>
                        </div>

                        <div class="panel">
                            <p class="social-text">Or register with your social account</p>
                            <div class="social-media-btn">
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>

                            <a class="underline text-sm text-gray-600 hover:own-text-red-900" href="{{ route('login') }}">
                                {{ __('Already registered? Log In') }}
                            </a>
                        </div>
                    </div>

                    <!-- Register Btn -->
                    <div class="flex items-center justify-end mt-4 flex-col">
                        <x-button class="">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
    </body>
