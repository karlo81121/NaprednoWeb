<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>
<body>
    
<x-guest-layout>
    <x-authentication-card>
        <div class="container login-container">
            <div>

            @if (session('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif

                <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" value="{{ __('Email') }}">Email</label>
                        <br>
                        <input class="mt-2 mb-2 rounded" id="email" type="email" name="email" :value="old('email')" required autocomplete="OFF" />
                    </div>

                    <div>
                        <label for="password" value="{{ __('Password') }}">Password</label>
                        <br>
                        <input class="mt-2 mb-2 rounded" id="password" type="password" name="password" required autocomplete="OFF" />
                    </div>

                    <button class="login-button mt-2">
                        {{ __('Log in') }}
                    </button>

                    <div class="mt-3 d-flex justify-content-center">
                        <label for="remember_me">
                            <input type="checkbox" id="remember_me" name="remember" />
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-3 d-flex justify-content-center">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </form>

                    <div class="vertical-line mx-5"></div>

                    <div class="registration-container">
                        <h1 class="not-a-member-title mb-4">Not a member?</h1>
                        <p class="registration-description mb-4">No matter if you're looking for a trip or want to promote your business, you can.</p>
                        <a href="{{ route('register') }}" class="text-decoration-underline">REGISTER HERE</a>
                    </div>
                </div>

            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>

</body>
</html>