<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/register-business.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>
<body>
    
<x-guest-layout>
    <x-authentication-card>

        <div class="container register-container w-25">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mt-3">
                    <label for="email" value="{{ __('Email') }}">Email</label>
                    <br>
                    <input class="rounded" id="email" type="email" name="email" :value="old('email')" required autocomplete="OFF" />
                </div>

                <div class="mt-3">
                    <label for="password" value="{{ __('Password') }}">Password</label>
                    <br>
                    <input class="rounded" id="password" type="password" name="password" required autocomplete="OFF" />
                </div>

                <div class="mt-3">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                    <br>
                    <input class="rounded" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="OFF" />
                </div>

                <div class="mt-3">
                    <label for="email" value="">Business Name</label>
                    <br>
                    <input class="rounded" id="business-name" type="text" name="business-name" :value="" required autocomplete="OFF" />
                </div>

                <div class="mt-3">
                    <label for="country" value="">Country</label>
                    <br>
                    <input class="rounded" id="country" type="text" name="country" :value="" required autocomplete="OFF" />
                </div>

                <div class="mt-3">
                    <label for="city" value="">City</label>
                    <br>
                    <input class="rounded" id="city" type="text" name="city" :value="" required autocomplete="OFF" />
                </div>

                <div class="mt-3">
                    <label for="description" value="">Description</label>
                    <br>
                    <textarea name="description" id="description" cols="23" rows="5" class="mb-1"></textarea>
                </div>

                <div class="mt-3">
                    <label for="image-url" value="">Image URL</label>
                    <br>
                    <input class="rounded" id="image-url" type="text" name="image-url" :value="" required autocomplete="OFF" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <button class="register-button mt-3">
                    {{ __('Register') }}
                <button>                        

                <br>

                <div class="already-registered-container text-center mt-3">
                    <a href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

            </form>
        </div>

    </x-authentication-card>
</x-guest-layout>

</body>
</html>