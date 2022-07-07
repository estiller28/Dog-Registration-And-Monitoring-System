<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Bureau of Animal Industry"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    @livewireStyles
    <link href="{{ asset('home/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('home/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<header id="header" class="d-flex align-items-center">
    <div class="container-xl d-flex align-items-center">
        <div class="me-auto">
            <a href="{{ url('/') }}"><img class="img-fluid" style="width: 54px;" src="{{ asset('./storage/logo/logo.png') }}"></a>
            <span class="px-2"><strong>Bureau Of Animal Industry</strong> </span>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto text-white active" href="#heroCarousel">Home</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a class="getstarted scrollto text-white" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a class="getstarted scrollto text-white" href="{{ route('login') }}">Login</a></li>
                    @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle text-white"></i>
        </nav>
    </div>
</header>

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(/storage/images/image5.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bureau Of Animal Industry</h2>
                        <p class="animate__animated animate__fadeInUp">Bulan Sorsogon Philippines</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Search Dogs</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(/storage/images/image9.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bureau Of Animal In Industry</h2>
                        <p class="animate__animated animate__fadeInUp">Bulan Sorsogon Philippines</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Search Dogs</a>
                    </div>
                </div>
            </div>

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
</section>

<main id="main" style="background: #ffff;">
    <section id="cta" class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Online Tracking of Dogs</h3>
                    <p>This website will provide an access to public to track or search dog informations.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Search Dogs</h2>
                <p class="text-dark">In this section, you will be able to track dogs information should you found missing dogs in anywhere you are.
                    Simply provide the dog ID number and you'll see results in seconds.</p>
            </div>

            @livewire('search-dogs')

        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <h4>Municipality of Bulan Sorsogon </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque nostrum perferendis ratione soluta! Accusantium ad adipisci assumenda de </p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Bureau of Animal Industry - Bulan Sorsogon</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Powered by <a href="https://bootstrapmade.com/">SSC BC - Capstone</a>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</main>
@livewireScripts
<script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('home/assets/js/main.js') }}"></script>

</body>
</html>
