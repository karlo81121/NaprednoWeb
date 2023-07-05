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

        <title>Agency Details</title>
    </head>

    <body>
        <div class="container mt-5 agency-details mb-5">
            <img src="images/trip.jpg" class="check-this-out-picture" />
            <div class="bottom-left-trip">Agencija Joza Kovaćušin</div>
        </div>

        <div class="container">
            <p class="mt-5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, esse. Animi veritatis quod at repellendus, id a culpa facere corporis nobis totam, iste soluta accusantium nam tempora quibusdam quas! Magni?</p>
        </div> 

        <div class="container destionation-container mb-5">
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">Destinations</h3>
            </div>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Maldivi</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
            </div>
            </a>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod beatae, ad nobis eveniet harum, dolore voluptates.</p>
                </div>
            </div>
            </a>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img class="sold-out-image" src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Podvinje</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit cupiditate eveniet voluptate quisquam placeat officiis ipsum, ex, exercitationem, ipsam soluta quasi natus nihil alias ducimus laboriosam quidem facilis totam. Quisquam?</p>
                </div>
                <div class="centered text-danger"><b>SOLD OUT</b></div>
            </div>
            </a>

        </div>
    </body>
</html>
