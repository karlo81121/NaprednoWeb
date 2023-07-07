<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/agency-details.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">

    <title>Tripify - {{ $agency->name }}</title>
</head>

<body>
    @include('header')

    <div class="container mt-5 agency-details mb-5">
        <img src="{{ $agency->picture }}" class="check-this-out-picture" />
        <div class="bottom-left-trip">{{ $agency->name }}</div>
    </div>

    <div class="container">
        <p class="mt-5 mb-5">{{ $agency->description }}</p>
    </div>
    <div class="container destionation-container mb-5">
        @if (!is_null($destinations) && count($destinations) > 0)

            <div class="destination-title-container">
                <h3 class="text-dark mb-4">Destinations</h3>
            </div>

            @foreach ($destinations as $destination)
                <a href="#">
                    <div class="card destination-card w-100 mb-3" style="overflow: hidden">
                        <img src="{{ $destination->picture }}" width="250" height="250" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $destination->name }}</h5>
                            <p class="card-price">{{ $destination->cost }} $</p>
                            <p class="card-text">{{ $destination->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">This agency does not offer any destinations</h3>
            </div>
        @endif
    </div>

    @include('footer')
</body>

</html>
