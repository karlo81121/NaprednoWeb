<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>

<body>

    @include('header')
    <x-guest-layout>
        <x-authentication-card>

            <div class="container register-container w-25">
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label for="name" value="name">Name</label>
                        <br>
                        <input class="rounded" id="name" type="text" name="name" :value="old('name')"
                            required autocomplete="OFF" />
                    </div>

                    <div class="mt-3">
                        <label for="name" value="surname">Surname</label>
                        <br>
                        <input class="rounded" id="surname" type="text" name="surname" :value="old('surname')"
                            required autocomplete="OFF" />
                    </div>

                    <div class="mt-3">
                        <label for="email" value="email">Email</label>
                        <br>
                        <input class="rounded" id="email" type="email" name="email" :value="old('email')"
                            required autocomplete="OFF" />
                    </div>

                    <div class="mt-3">
                        <label for="password" value="password">Password</label>
                        <br>
                        <input class="rounded" id="password" type="password" name="password" required
                            autocomplete="OFF" />
                    </div>

                    <div class="mt-3">
                        <label for="password_confirmation" value="password_confirmation">Confirm Password</label>
                        <br>
                        <input class="rounded" id="password_confirmation" type="password" name="password_confirmation"
                            required autocomplete="OFF" />
                    </div>

                    <button class="register-button mt-3">
                        {{ __('Register') }}
                        <button>

                            <div class="already-registered-container text-center mt-3">
                                <a href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>

                </form>
            </div>

        </x-authentication-card>
    </x-guest-layout>

    @include('footer')
</body>

</html>
