<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $destination->name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/create-trip-form.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>

<body>
    @include('header')

    <div class="container create-trip">
        <form method="POST" action="{{ url('/destination/' . $destination->id . '/edit') }}">
            @csrf

            <h3 class="text-dark">EDIT DESTINATION</h3>

            <label for="name"><b>Name</b></label>
            <br>
            <input disabled required type="text" id="name" name="name" class="mb-2" value="{{ $destination->name }}">
            <br>

            <label for="description"><b>Description</b></label>
            <br>
            <textarea required name="description" id="description" cols="23" rows="5" class="mb-1">{{ $destination->description }}</textarea>
            <br>

            <label for="price"><b>Price</b></label>
            <br>
            <input required type="number" id="price" name="cost" class="mb-2" value="{{ $destination->cost }}">
            <br>

            <button type="submit" class="update-button btn btn-danger mt-3 mb-5">SAVE EDITS</button>
        </form>
    </div>

    @include('footer')
</body>

</html>