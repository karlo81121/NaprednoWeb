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

    <title>User Profile</title>
</head>

<body>
    @include('header')

    <div class="container destionation-container mb-5 mt-5">
        <div class="destination-title-container">
            <h3 class="text-dark mb-4">MY TRIPS</h3>
        </div>

        <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Maldivi</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor
                        explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas
                        provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam
                        nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod
                        beatae, ad nobis eveniet harum, dolore voluptates.</p>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="images/trip.jpg" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Podvinje</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit cupiditate
                        eveniet voluptate quisquam placeat officiis ipsum, ex, exercitationem, ipsam soluta quasi natus
                        nihil alias ducimus laboriosam quidem facilis totam. Quisquam?</p>
                </div>
            </div>
        </a>
    </div>

    <div class="container destionation-container mb-5">
        <div class="destination-title-container">
            <h3 class="text-dark mb-4">PENDING</h3>
        </div>

        <div class="card destination-card w-100 mb-3">
            <img src="images/trip.jpg" width="250" height="250" />
            <div class="card-body">
                <h5 class="card-title">Maldivi</h5>
                <p class="card-price">450 $</p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo
                    perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident
                    distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
            </div>
            <div class="buttons">
                <button type="button" class="btn btn-danger">CANCEL</button>
            </div>
        </div>

        <div class="card destination-card w-100 mb-3">
            <img src="images/trip.jpg" width="250" height="250" />
            <div class="card-body">
                <h5 class="card-title">Belišće</h5>
                <p class="card-price">450 $</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam
                    nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod
                    beatae, ad nobis eveniet harum, dolore voluptates.</p>
            </div>
            <div class="buttons">
                <button type="button" class="btn btn-danger">CANCEL</button>
            </div>
        </div>

        <div class="card destination-card w-100 mb-3">
            <img src="images/trip.jpg" width="250" height="250" />
            <div class="card-body">
                <h5 class="card-title">Podvinje</h5>
                <p class="card-price">450 $</p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit cupiditate eveniet
                    voluptate quisquam placeat officiis ipsum, ex, exercitationem, ipsam soluta quasi natus nihil alias
                    ducimus laboriosam quidem facilis totam. Quisquam?</p>
            </div>
            <div class="buttons">
                <button type="button" class="btn btn-danger">CANCEL</button>
            </div>
        </div>
    </div>

    @include('footer')
</body>

</html>
