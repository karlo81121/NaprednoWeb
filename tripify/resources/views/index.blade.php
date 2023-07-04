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
    @include('header')

    @if (!is_null($featuredAgency))
        <div class="container mt-5 check-this-out-container mb-5">
            <img src="{{ URL::asset('/images/trip.jpg') }}" class="check-this-out-picture" />
            <div class="top-left">CHECK THIS OUT</div>
            <div class="bottom-left-agency">Agencija Joza Kovaćušin</div>
            <div class="bottom-left-trip">PUTOVANJE NA MALDIVE</div>
        </div>
    @endif

    @if (!is_null($destinations) && count($destinations) > 0)
        <div class="container destionation-container mb-5">
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">Destinations</h3>
            </div>

            @foreach ($destinations as $destination)
                <a href="#">
                    <div class="card destination-card w-100 mb-3">
                        <img src="{{ URL::asset('/images/trip.jpg') }}" width="250" height="250" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $destination->name }}</h5>
                            <p class="card-price">{{ $destination->cost }}</p>
                            <p class="card-text">{{ $destination->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif

    @if (!is_null($agencies) && count($agencies) > 0)
        <div class="container agencies-container mb-5">
            <div class="agencies-title-container">
                <h3 class="text-dark mb-4">Agencies</h3>
            </div>

            <div class="agencies-cards">
                @foreach ($agencies as $agency)
                    <a href="#">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ URL::asset('/images/trip.jpg') }}" width="300" height="250" />
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $agency->name }}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    @include('footer')
</body>

</html>
