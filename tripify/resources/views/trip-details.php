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

        <title>Trip Details</title>
    </head>

    <body>
        <div class="container">
            <h3 class="mt-5 mb-5">NAZIV PUTOVANJA</h3>
            <img src="images/trip.jpg" class="trip-image" />

            <div class="sold-out-container mt-5 mb-5">
                <h2 class="text-danger">SOLD OUT</h2>
            </div>

            <p class="mt-3 mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur minus vero esse repudiandae odit. Quas molestiae modi eius neque dolores ab ea autem cupiditate labore. Eum a dolor porro iure?</p>
        
            <h3 class="mb-5">PLACES YOU'LL VISIT</h3>

            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="200" height="200" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
            </div>

            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="200" height="200" />
                <div class="card-body">
                    <h5 class="card-title">Podvinje</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
            </div>

            <div class="detail-containers mt-5 mb-5">
                <div class="residence-container mx-2">
                    <h3 class="text-dark">HOTEL</h3>
                </div>
                <div class="vehicle-container mx-2">
                    <h3 class="text-dark">AIRPLANE, BUS</h3>
                </div>
                <div class="extra-info-container mx-2">
                    <h3 class="text-dark">EXTRA INFO</h3>
                </div>
            </div>

            <a href="#">
                <div class="book-reservation mb-5">
                    <h3 class="text-light">BOOK A RESERVATION</h3>
                </div>
            </a>

            <h3 class="text-dark mb-5">You've already made a reservation for this trip.</h3>
        </div>
    </body>
</html>
