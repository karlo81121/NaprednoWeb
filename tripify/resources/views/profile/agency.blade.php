<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripify - Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/agency-reservation-list.css" />
    <link rel="stylesheet" href="css/agency-trip-list.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>

<body>
    @include('header')

    <div class="container">
        <h3 class="mt-5 mb-5">TRIPS YOU OFFER</h3>
    </div>

    @if (!is_null($destinations) && count($destinations) > 0)
        @foreach ($destinations as $destination)
            <div class="container destionation-container mb-5">
                <div class="card destination-card w-100 mb-4">
                    <a href="{{ url('/destination/' . $destination->id) }}"><img src="{{ $destination->picture }}"
                            width="250" height="250" /></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-price">{{ $destination->cost }}</p>
                        <p class="card-text">{{ $destination->description }}</p>
                    </div>
                    <div class="buttons">
                        <a href="{{ url('/destination/' . $destination->id . '/edit') }}" style="display:block"><button
                                type="button" class="btn btn-primary button-edit mb-2">EDIT</button></a>

                        <form id="deleteForm" action="{{ url('/destination/' . $destination->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger button-delete mt-2">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="container mt-5 mb-5">
            <h3 class="mt-5">Niste ponudili nijedno putovanje.</h3>
        </div>
    @endif

    <div class="container mt-5 mb-5">
        <button type="button" class="btn btn-success add-new-trip-button w-100"><a
                href="{{ url('/destination/create') }}" style="color:white">ADD NEW TRIP</a></button>
    </div>

    @if (!is_null($reservations) && count($reservations) > 0)
        <div class="container">
            <h3 class="mt-5 mb-5">RESERVATIONS PENDING APPROVAL</h3>

            @foreach ($reservations as $reservation)
                <div class="card agency-reservation-card w-100 mb-4">
                    <img src="{{ $reservation->picture }}" width="250" height="250" />
                    <div class="card-body">
                        <p class="trip-name">{{ $reservation->destinationName }}</p>
                        <div class="reservation-data">
                            <span class="reservation-for">RESERVATION FOR</span>
                            <br>
                            <span class="card-name">{{ $reservation->name }}</span>
                        </div>
                    </div>

                    <form id="approve" action="{{ url('/reservation/approve/' . $reservation->id) }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-success mt-2">APPROVE</button>
                    </form>

                    <form id="cancel" action="{{ url('/reservation/delete/' . $reservation->id) }}" method="POST">
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
