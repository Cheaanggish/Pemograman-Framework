<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/owl.theme.default.min.css')}}">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/aos.css')}}">

    <!-- ------------ Custom Style ------------------------   -->
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/Style.css')}}">

    <!-- -------------- Favicon -------------------------- -->
    <link rel="shortcut icon" href="assets/icon.ico">

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

   @include('layouts.navbar')

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

    <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h1>Hi! I'm Chea Anggi Syahrain Hariyani</h1>
                <h3>Manajemen Informatika | Mahasiswa</h3>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->


    <!-- Jquery Library file -->
    <script src="{{asset('assets/Portfolio/js/Jquery3.4.1.min.js')}}"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="{{asset('assets/Portfolio/js/owl.carousel.min.js')}}"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="{{asset('assets/Portfolio/js/aos.js')}}"></script>

    <!-- Custom Javascript file -->
    <script src="{{asset('assets/Portfolio/js/main.js')}}"></script>
    
</body>

</html>