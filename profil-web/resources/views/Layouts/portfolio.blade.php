<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Portfolio</title>

	<!-- -------- Font Awesome Icons ---------------------- -->
	<link rel="stylesheet" href="./css/all.css">


	<!-- --------- Owl-Carousel -------------------------- -->
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">

	<!-- ------------ AOS Library ------------------------- -->
	<link rel="stylesheet" href="./css/aos.css">

	<!-- ---------- Custom Style ----------------------- -->
	<link rel="stylesheet" href="./css/Style.css">
	<link rel="stylesheet" href="./css/portfolio.css">


	<!-- -------------- Favicon -------------------------- -->
	<link rel="shortcut icon" href="assets/icon.ico">

</head>

<body>

    @include('layouts.navbar')
	<!-- -----------x----------- Portfolio ---------------x----------->

	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Portfolio</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p class="my-foap text-center"><a href="https://www.foap.com/user/elsavirantika/market/"
							target="_blank">My Foap</a></p>
				</div>
			</div>
			<!-- Images -->
			<div class="row img-atas">
				<div class="col-md-4 text-center">
					<a href="" class="thumbnail">
						<img src="{{asset('assets/Portfolio/assets/portfolio/img1.png')}}">
					</a>
				</div>

				<div class="col-md-4 text-center">
					<a href="" class="thumbnail">
						<img src="{{asset('assets/Portfolio/assets/portfolio/img2.jpeg')}}">
					</a>
				</div>

				<div class="col-md-4 text-center">
					<a href="" class="thumbnail">
						<img src="{{asset('assets/Portfolio/assets/portfolio/img3.jpg')}}">
					</a>
				</div>
			</div>

			<div class="row mt-5 img-bawah">
				<div class="col-md-4 text-center">
					<a href="" class="thumbnail">
						<img src="{{asset('assets/Portfolio/assets/portfolio/img4.jpg')}}">
					</a>
				</div>

				<div class="col-md-4 text-center">
					<a href="" class="thumbnail">
						<img src="{{asset('assets/Portfolio/assets/portfolio/img5.jpg')}}">
					</a>
				</div>

				<div class="col-md-4 text-center">
					<a href="" class="thumbnail">
						<img src="{{asset('assets/Portfolio/assets/portfolio/img6.png')}}">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- -----------x----------- Portfolio ---------------x---------->


	<!-- ----------x---------- Blog Carousel --------x-------- -->
	<script src="./js/Jquery3.4.1.min.js"></script>

	<!-- --------- Owl-Carousel js ------------------->
	<script src="./js/owl.carousel.min.js"></script>

	<!-- ------------ AOS js Library  ------------------------- -->
	<script src="./js/aos.js"></script>

	<!-- Custom Javascript file -->
	<script src="./js/main.js"></script>


</body>

</html>