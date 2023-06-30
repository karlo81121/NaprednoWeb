<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">

        <title>Tripify</title>
    </head>

    <body>
        <div class="container d-flex justify-content-between align-items-baseline mt-2">
            <h1 class="text-dark">Tripify</h1>
            @if (Route::has('login'))
                <div class="authentication-container">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-dark">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-dark mx-1">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-dark mx-1">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="container mt-5 check-this-out-container mb-5">
            <img src="{{URL::asset('/images/trip.jpg')}}" class="check-this-out-picture" />
            <div class="top-left">CHECK THIS OUT</div>
            <div class="bottom-left-agency">Agencija Joza Kovaćušin</div>
            <div class="bottom-left-trip">PUTOVANJE NA MALDIVE</div>
        </div>

        <div class="container destionation-container mb-5">
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">Destinations</h3>
            </div>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Maldivi</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
            </div>
            </a>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod beatae, ad nobis eveniet harum, dolore voluptates.</p>
                </div>
            </div>
            </a>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Podvinje</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit cupiditate eveniet voluptate quisquam placeat officiis ipsum, ex, exercitationem, ipsam soluta quasi natus nihil alias ducimus laboriosam quidem facilis totam. Quisquam?</p>
                </div>
            </div>
            </a>

        </div>

        <div class="container agencies-container mb-5">
            <div class="agencies-title-container">
                <h3 class="text-dark mb-4">Agencies</h3>
            </div>

            <div class="agencies-cards">
                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>

                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>

                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>

                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>
            </div>

        </div>
    </body>
</html>
