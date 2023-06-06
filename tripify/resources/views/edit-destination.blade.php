<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit destination</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/edit-destination.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container edit-destination">
        <form action="POST">
            <h3 class="text-dark">EDIT DESTINATION</h3>
            <label for="name"><b>Name</b></label>
            <br>
            <input type="text" id="name" class="mb-2">
            <br>
            <label for="description"><b>Description</b></label>
            <br>
            <textarea name="description" id="description" cols="23" rows="5" class="mb-1"></textarea>
            <br>
            <label for="accommodation"><b>Accommodation</b></label>
            <br>
            <input type="text" id="accommodation" class="mb-3">
            <br>
            <span><b>Transportation Options</b></span>
            <br>
            <input type="checkbox" id="bus">
            <label for="bus">Bus</label>
            <br>
            <input type="checkbox" id="airplane">
            <label for="airplane">Airplane</label>
            <br>
            <input type="checkbox" id="private" class="mb-3">
            <label for="private">Private</label>
            <br>
            <label for="extra-info"><b>Extra Info</b></label>
            <br>
            <input type="text" id="extra-info" class="mb-2">
            <br>
            <label for="image-url"><b>Image URL</b></label>
            <br>
            <input type="text" id="image-url" class="mb-2">
            <br>
            <button type="button" value="Submit" class="update-button btn btn-danger mt-2">Update destination</button>
        </form>
    </div>

</body>
</html>