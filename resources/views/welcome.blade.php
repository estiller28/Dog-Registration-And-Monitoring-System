<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('home/assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="">


<header id="header" class="d-flex align-items-center">
    <div class="container-lg d-flex align-items-center">
        <div class="me-auto">
            <a href="{{ url('/') }}"><img class="img-fluid" style="width: 54px;" src="{{ asset('./storage/logo/logo.png') }}"></a>
            <span class="px-2"><strong>Bureau Of Animal Industry</strong> </span>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Search</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                    @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(/storage/images/image5.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bureau Of Animal Industry</h2>
                        <p class="animate__animated animate__fadeInUp">Bulan Sorsogon Philippines</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Search Dogs</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(/storage/images/image9.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bureau Of Animal Industry</h2>
                        <p class="animate__animated animate__fadeInUp">Bulan Sorsogon Philippines</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Search Dogs</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(/storage/images/image1.jpg)  ">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bureau Of Animal Industry</h2>
                        <p class="animate__animated animate__fadeInUp">Bulan Sorsogon Philippines</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Search Dogs</a>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">


{{--            <div class="row no-gutters">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="icon-box">--}}
{{--                        <div class="card">--}}
{{--                            <img src="{{ asset('/storage/images/image6.jpg') }}" alt="">--}}
{{--                        </div>--}}

{{--                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>--}}
{{--                        <p class="description">Volu</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="icon-box">--}}
{{--                        <div class="icon"><i class="bi bi-briefcase"></i></div>--}}
{{--                        <h4 class="title"><a href="">Dolor Sitema</a></h4>--}}
{{--                        <p class="description">M</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="icon-box">--}}
{{--                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>--}}
{{--                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
{{--                        <p class="description">lorem</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
    </section>

</main>

<script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('home/assets/js/main.js') }}"></script>
</body>
</html>
