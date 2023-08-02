<!doctype html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('pageTitle') - IntelPS</title>

	<link rel="icon" href="/logos/fav2.ico" type="image/x-icon">

	{{-- <link rel="apple-touch-icon" type="image/png" href="/logos/fav1.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="/logos/fav2.ico">
	<link rel="icon" type="image/png" sizes="16x16" href="/logos/fav2.ico"> --}}
	<link rel="mask-icon" href="/logos/fav2.ico" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	@yield('css')
	<!-- Dependency Styles -->
	<link rel="stylesheet" href="/theme/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/swiper/css/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/themify-icons/css/themify-icons.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="/theme/dependencies/slick-carousel/css/slick.css" type="text/css">


	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="/theme/css/app.css" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CPoppins:300,400,500,600,700,800" rel="stylesheet">

</head>

<body id="home-version-1" class="home-saas-main" data-style="default">

	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<div class="page-loader">
		<div class="page-loading-wrapper">
			<div class="loading loading07">
				<span data-text="I">I</span>
				<span data-text="N">N</span>
				<span data-text="T">T</span>
				<span data-text="E">E</span>
				<span data-text="L">L</span>
				<span data-text="L">L</span>
				<span data-text="I">I</span>
				<span data-text="S">S</span>
				<span data-text="A">A</span>
				<span data-text="S">S</span>
			</div>
		</div>
	</div>


	<div id="main_content" class="main-content">


    @yield('content')


<!--=========================-->
		<!--=        Footer         =-->
		<!--=========================-->
		@include('frontend.layouts.footer')
		<!-- /#footer -->

	<div class="high-lighter-overlay"></div>

</div>
<!-- /#site -->

<!-- Dependency Scripts -->
{{-- <script src="/theme/dependencies/jquery/jquery.min.js"></script> --}}
<!-- Specific version of jQuery (e.g., version 3.6.0) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/theme/dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="/theme/dependencies/swiper/js/swiper.min.js"></script>
<script src="/theme/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/theme/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/theme/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="/theme/dependencies/jquery.appear/jquery.appear.js"></script>
<script src="/theme/dependencies/wow/js/wow.min.js"></script>
<script src="/theme/js/TweenMax.min.js"></script>
<script src="/theme/dependencies/countUp.js/countUp.min.js"></script>
<script src="/theme/dependencies/bodymovin/lottie.min.js"></script>
<script src="/theme/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
<script src="/theme/dependencies/wavify/wavify.js"></script>
<script src="/theme/dependencies/jquery.marquee/js/jquery.marquee.js"></script>
<script src="/theme/js/jarallax.min.js"></script>
<script src="/theme/dependencies/gmap3/js/gmap3.min.js"></script>
<script src="/theme/dependencies/slick-carousel/js/slick.min.js"></script>
<script src="/theme/js/jquery.parallax.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M'></script>


<!-- Site Scripts -->
<script src="/theme/js/header.js"></script>
<script src="/theme/js/app.js"></script>
@yield('js')
</body>

</html>