<div class="container d-flex justify-content-between align-items-baseline py-2" style="background-color: lightgray;">
    <a href="{{ url('/') }}"><h1 class="text-dark my-3 px-2 font-weight-bold"><b>Tripify</b></h1></a>
    <div class="authentication-container">
        @auth
            <a href="{{ url('/profile') }}" class="text-dark mx-4">Profile</a>
            <a href="{{ url('/logout') }}" class="text-dark">Log Out</a>
        @else
            @if (!Str::contains(request()->url(), 'login'))
                <a href="{{ url('login') }}" class="text-dark mx-4">Log in</a>
            @endif

           @if (!Str::contains(request()->url(), 'register'))
                <a href="{{ url('register') }}" class="text-dark mx-4">Register</a>
            @endif
        @endauth
    </div>
</div>
