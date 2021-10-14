<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- -------- Font Awesome Icons ---------------------- -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel -------------------------- -->
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/owl.theme.default.min.css')}}">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/aos.css')}}">

    <!-- ---------- Custom Style ----------------------- -->
    <link rel="stylesheet" href="{{asset('assets/Portfolio/css/Style.css')}}">

    <!-- -------------- Favicon -------------------------- -->
    <link rel="shortcut icon" href="assets/icon.ico">

</head>

<body>

    <!-- ----------------------------  Navigation ----------------------------------------- -->
    @include('layouts.navbar')

    <!-- ------------x------------------  Navigation ---------------------x------------------- -->


    <!-------------------------------- Main Site Section ----------------------------------->

    <main>

        <!--------------------------------- Site Title --------------------------------->
        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h1>Hi! I'm Chea Anggi Syahrain Hariyani</h1>
                <h3>Manajemen Informatika| Mahasiswa</h3>
            </div>
        </section>

        <!------------x------------------ Site Title ----------x------------------->


        <!-- ------------x-------------  Navigation ----------------x------------------- -->


        <!-- ---------------------------- About Me ------------------------------- -->
        @include('layouts.about')

        <!------------x------------------------- About Me -------------------------x----------->

        @include('layouts.education')

        <!-- -----------x----------- Portfolio ---------------x----------->
        @include('layouts.portfolio')
        <!-- -----------x----------- Portfolio ---------------x---------->


        <!-- -------------------------------- Contact Us ----------------------------------- -->

        <div class="contact-section">

            <h1>Contact Us</h1>
            <div class="border"></div>
            <form class="contact-form" action="index.html" method="post">
                <input type="text" class="contact-form-text" placeholder="Your name">
                <input type="email" class="contact-form-text" placeholder="Your email">
                <input type="text" class="contact-form-text" placeholder="Your phone">
                <textarea class="contact-form-text" placeholder="Your message"></textarea>
                <input type="submit" class="contact-form-btn" value="Send">
            </form>
        </div>

        <!-- --------------x------------- Contact Us -------------------------x-------------->

    </main>

    <!---------------x------------- Main Site Section ---------------x------------------>


    <!-- ------------------------------ Footer ---------------------------------------- -->
    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>This is a web portfolio from Elsa Virantika.
                    Welcome back and hope you like it :)</p>
            </div>

            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <a href="https://web.facebook.com/elsa.virantika/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/elsa_virantika/?hl=en"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/VirantikaElsa"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 All rights | made by
                <a href="https://www.instagram.com/elsa_virantika/?hl=en" target="_black">Chea Anggi Syahrain Hariyani <i
                        class="fab fa-instagram"></i></a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>
    <!-- -------------x------------- Footer --------------------x------------------- -->





    <!-- ------------- Jquery Library file ----------------- -->
    <script src="{{asset('asset/Portfolio/js/Jquery3.4.1.min.js')}}"></script>

    <!-- --------------- Owl-Carousel js --------------------- -->
    <script src="{{asset('asset/Portfolio/js/owl.carousel.min.js')}}"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="{{asset('asset/Portfolio/js/aos.js')}}"></script>

    <!-- ------------Custom Javascript file ------------------- -->
    <script src="{{asset('asset/Portfolio/js/main.js')}}"></script>

</body>

</html>