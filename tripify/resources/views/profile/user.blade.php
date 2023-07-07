<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user-profile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">

    <title>Tripify - Profile</title>
</head>

<body>
    @include('header')

    <div class="container destionation-container mb-5 mt-5">
        <div class="destination-title-container">
            <h3 class="text-dark mb-4">MY TRIPS</h3>
        </div>

        @if (!is_null($approvedDestinations) && count($approvedDestinations) > 0)
            @foreach ($approvedDestinations as $destination)
                <a href="destination/{{ $destination->id }}">
                    <div class="card destination-card w-100 mb-3">
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
            You have not booked any destinations yet :/
        @endif
    </div>

    @if (!is_null($pendingDestinations) && count($pendingDestinations) > 0)
        <div class="container destionation-container mb-5">
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">PENDING</h3>
            </div>

            @foreach ($pendingDestinations as $pDestination)
                <div class="card destination-card w-100 mb-3">
                    <img src="{{ $pDestination->picture }}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $pDestination->name }}</h5>
                        <p class="card-price">{{ $pDestination->cost }} $</p>
                        <p class="card-text">{{ $pDestination->description }}</p>
                    </div>

                    <form id="book" action="{{ url('/reservation/delete/' . $pDestination->id) }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger mt-2">CANCEL</button>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    @include('footer')
</body>

</html>
