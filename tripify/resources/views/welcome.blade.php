<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">

        <title>Tripify</title>
    </head>

    <body>
        <div class="container d-flex justify-content-between align-items-baseline mt-2">
            <h1 class="text-dark">Tripify</h1>
            @if (Route::has('login'))
                <div class="authentication-container">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-dark">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-dark mx-1">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-dark mx-1">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="container mt-5 check-this-out-container mb-5">
            <img src="{{URL::asset('/images/trip.jpg')}}" class="check-this-out-picture" />
            <div class="top-left">CHECK THIS OUT</div>
            <div class="bottom-left-agency">Agencija Joza Kovaćušin</div>
            <div class="bottom-left-trip">PUTOVANJE NA MALDIVE</div>
        </div>

        <div class="container destionation-container mb-5">
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">Destinations</h3>
            </div>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Maldivi</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor explicabo perferendis pariatur saepe blanditiis modi. Inventore ipsa rem commodi a voluptas provident distinctio magni! Cupiditate nobis neque voluptatem dolores?</p>
                </div>
            </div>
            </a>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Belišće</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptate? Veniam nostrum quae suscipit dolore, quia culpa. Reiciendis dolores, quam voluptatem laudantium quod beatae, ad nobis eveniet harum, dolore voluptates.</p>
                </div>
            </div>
            </a>

            <a href="#">
            <div class="card destination-card w-100 mb-3">
                <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                <div class="card-body">
                    <h5 class="card-title">Podvinje</h5>
                    <p class="card-price">450 $</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit cupiditate eveniet voluptate quisquam placeat officiis ipsum, ex, exercitationem, ipsam soluta quasi natus nihil alias ducimus laboriosam quidem facilis totam. Quisquam?</p>
                </div>
            </div>
            </a>

        </div>

        <div class="container agencies-container mb-5">
            <div class="agencies-title-container">
                <h3 class="text-dark mb-4">Agencies</h3>
            </div>

            <div class="agencies-cards">
                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>

                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>

                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>

                <a href="#">
                <div class="card" style="width: 17rem;">
                    <img src="{{URL::asset('/images/trip.jpg')}}" width="250" height="250" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Agencija Joza Kovaćušin</h5>
                    </div>
                </div>
                </a>
            </div>

        </div>

        <div class="footer">
            <div class="first-section mx-5">
                <p>Property of T-Agency d.o.o.</p>
                <p>2023 Copyright</p>
                <p>All rights reserved</p>
            </div>
            <div class="first-line"></div>
            <div class="second-section mx-5">
                <p>You can email us for support:</p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    support@tagency.com
                </p>
                <p>Or give us a call:</p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>    
                    +385 95 581 7660
                </p>
            </div>
            <div class="second-line"></div>
            <div class="third-section mx-5">
                <p>Created by:</p>
                <p>Adžić Karlo</p>
                <p>Bruno Benčević</p>
                <p>Fran Zamaklar</p>
                <a href="#"><p class="more-about-us">Click here to find more about us.</p></a>
            </div>
        </div>
    </body>
</html>
