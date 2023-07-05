<div class="container d-flex justify-content-between align-items-baseline mt-2">
    <h1 class="text-dark mt-4">Tripify</h1>
    <div class="authentication-container">
        @auth
            <a href="{{ url('/profile') }}" class="text-dark">Profile</a>
            <a href="{{ url('/logout') }}" class="text-dark">Log Out</a>
        @else
            @if (!Str::contains(request()->url(), 'login'))
                <a href="{{ url('login') }}" class="text-dark mx-1">Log in</a>
            @endif

           @if (!Str::contains(request()->url(), 'register'))
                <a href="{{ url('register') }}" class="text-dark mx-1">Register</a>
            @endif
        @endauth
    </div>
</div>
