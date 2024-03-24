<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolstore</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fontawesome 6 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Boolstore</a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
                    <i class="fa-solid fa-bars fa-xl text-light"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg"
                    aria-labelledby="navbarOffcanvasLgLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Boolstore</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body w-100">
                        <ul class="navbar-nav justify-content-center align-items-lg-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PRICING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TESTIMONIALS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NEWS</a>
                            </li>
                        </ul>
                        <div class="d-flex gap-3 align-items-center">
                            <a class="social-link" href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a class="social-link" href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>

                            <a class="social-link" href="#">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
</body>

</html>
