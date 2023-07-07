<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Destination</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/create-trip-form.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>

<body>
    @include('header')

    <div class="container create-trip">
        <form method="POST" action="{{ url('/destination/create') }}">
            @csrf

            <h3 class="text-dark">CREATE A DESTINATION</h3>

            <label for="name"><b>Name</b></label>
            <br>
            <input required type="text" id="name" name="name" class="mb-2">
            <br>

            <label for="description"><b>Description</b></label>
            <br>
            <textarea required name="description" id="description" cols="23" rows="5" class="mb-1"></textarea>
            <br>

            <label for="price"><b>Price</b></label>
            <br>
            <input required type="number" id="price" name="cost" class="mb-2">
            <br>

            <label for="reservation-count"><b>Reservation count</b></label>
            <br>
            <input required type="number" id="reservation-count" name="capacity" class="mb-2">
            <br>

            <label for="accommodation"><b>Accommodation</b></label>
            <br>
            <input required type="text" id="accommodation" name="accomodation" class="mb-3">
            <br>

            <span><b>Transportation Options</b></span>
            <br>

            <input required type="radio" name="travel" id="bus">
            <label for="bus">Bus</label>
            <br>

            <input required type="radio" name="travel" id="airplane">
            <label for="airplane">Airplane</label>
            <br>

            <input required type="radio" name="travel" id="private" class="mb-3">
            <label for="private">Private</label>
            <br>
            <br>

            <input required type="checkbox" id="checkbox1" name="accomodation" value="option1">
            <label for="checkbox1">Has Accommodation</label>
            <br><br>

            <label for="extra-info"><b>Extra Info</b></label>
            <br>
            <input required type="text" id="extra-info" name="info" class="mb-2">
            <br>

            <label for="image-url"><b>Image URL</b></label>
            <br>
            <input required type="text" id="image-url" name="picture" class="mb-2">
            <br>

            <h4 class="mt-3 mb-3 text-dark">TRIP POINTS</h4>
            <div id="trip_points">
                <div id="trip_point_1" class="trip-point mb-3">
                    <p><b>#1</b></p>
                    <label for="name_1"><b>Name</b></label>
                    <input name="attractions[1][name]" type="text" id="name_1" placeholder="Name" required>
                    <br>

                    <label for="image_url_1"><b>Image URL</b></label>
                    <input name="attractions[1][picture]" type="text" id="image_url_1" placeholder="Image URL" required>
                    <br>

                    <label for="description_1"><b>Description</b></label>
                    <textarea name="attractions[1][description]" id="description_1" placeholder="Description" cols="23" rows="5" class="mb-1"
                        required></textarea>
                    <br>
                </div>
            </div>

            <button id="button_add_new_attraction" type="button" class="btn btn-success add-button text-light mt-3">ADD
                NEW ATTRACTION</button>

            <button type="submit" class="update-button btn btn-danger mt-3 mb-5">SAVE
                DESTINATION</button>
        </form>
    </div>

     @include('footer')

    <script src="{{ asset('js/createDestination.js') }}"></script>
</body>

</html>
