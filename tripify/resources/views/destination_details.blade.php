<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/trip-details.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">

    <title>Tripify - {{ $destination->name }}</title>
</head>

<body>
    @include('header')

    <div class="container">
        <h3 class="mt-5 mb-5">{{ $destination->name }}</h3>
        <img src="{{ $destination->picture }}" class="trip-image" width="100%" height="150px" />

        @if ($destination->capacity <= 0)
            <div class="sold-out-container mt-5 mb-5">
                <h2 class="text-danger">SOLD OUT</h2>
            </div>
        @endif

        <p class="mt-3 mb-5">{{ $destination->description }}</p>

        @if (!is_null($attractions) && count($attractions) > 0)
            <h3 class="mb-5">PLACES YOU'LL VISIT</h3>

            @foreach ($attractions as $attraction)
                <div class="container">
                    <div class="card d-flex destination-card w-100 mb-3">
                        <img src="{{ $attraction->picture }}" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $attraction->name }}</h5>
                            <p class="card-text">{{ $attraction->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="mb-5">The agency has not provided info on any attractions you will visit.</h3>
        @endif

        <div class="detail-containers mt-5 mb-5">
            <div class="residence-container mx-2">
                <h3 class="text-dark">ACCOMMODATION: YES</h3>
            </div>
            <div class="vehicle-container mx-2">
                <h3 class="text-dark">TRANSPORTATION: {{ $transportation }}</h3>
            </div>
            <div class="extra-info-container mx-2">
                <h3 class="text-dark">TYPE: {{ $type }}</h3>
            </div>
        </div>

        @if ($canBookReservation && !$didMakeReservation)
            <form id="book" action="{{ url('/reservation/create/' . $destination->id)}}" method="POST">
                @csrf
                
                <button type="submit" class="btn btn-success mt-2">BOOK A RESERVATION</button>
            </form>
        @endif

        @if ($didMakeReservation)
            <h3 class="text-dark mb-5">You've already made a reservation for this trip.</h3>
        @endif
    </div>

    @include('footer')
</body>

</html>
