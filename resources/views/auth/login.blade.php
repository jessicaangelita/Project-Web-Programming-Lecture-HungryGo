<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HungryGo | Login</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="icon" href="./images/img_logo.png">
  </head>

  <body>
    <x-guest-layout>
        <x-auth-card style="background-color: #1f1f1f">
            <x-slot name="logo">
                <a href="/" class="navbar-brand me-10 py-0 md-5">
                    <img src="./images/img_logo.png" alt="HungryGo's Logo" height="32" width="100px">
                    <img src="./images/text_logo.png" alt="HungryGo's Logo" height="32" width="100px">
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form class="" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-register-form">
                    <!-- Email Address -->
                    <div class="login-input-field">
                        <i class="fas fa-envelope"></i>
                        <x-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 login-input-field" >
                        <i class="fas fa-lock"></i>
                        <x-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="login">
                    <div class="block mt-4">
                        <a class="underline text-sm text-gray-600 hover:own-text-red-900" href="{{ route('register') }}">
                            {{ __('New here? Register') }}
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4 flex-col">
                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
</body>
