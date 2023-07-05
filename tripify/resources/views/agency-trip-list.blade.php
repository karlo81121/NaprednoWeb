<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/agency-trip-list.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">

        <title>Agency Trip List</title>
    </head>

    <body> 
        <div class="container">
            <h3 class="mt-5 mb-5">TRIPS YOU OFFER</h3>
        </div>

        <div class="container destionation-container mb-5">
            <div class="card destination-card w-100 mb-4">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Maldivi</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
                <div class="buttons">
                    <button type="button" class="btn btn-primary button-edit mb-2">EDIT</button>
                    <button type="button" class="btn btn-danger button-delete mt-2">DELETE</button>
                </div>
            </div>

            <div class="card destination-card w-100 mb-4">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod beatae, ad nobis eveniet harum, dolore voluptates.</p>
                </div>
                <div class="buttons">
                    <button type="button" class="btn btn-primary button-edit mb-2">EDIT</button>
                    <button type="button" class="btn btn-danger button-delete mt-2">DELETE</button>
                </div>
            </div>

            <div class="card destination-card w-100 mb-4">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod beatae, ad nobis eveniet harum, dolore voluptates.</p>
                </div>
                <div class="buttons">
                    <button type="button" class="btn btn-primary button-edit mb-2">EDIT</button>
                    <button type="button" class="btn btn-danger button-delete mt-2">DELETE</button>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <button type="button" class="btn btn-success add-new-trip-button w-100">ADD NEW TRIP</button>
        
            <h3 class="mt-5">Niste ponudili nijedno putovanje.</h3>
        </div>
    </body>
</html>
