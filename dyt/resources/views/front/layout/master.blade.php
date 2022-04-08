
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	{!! SEO::generate() !!}

	<link rel="apple-touch-icon" sizes="180x180" href="/front/assets/img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/front/assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/front/assets/img/fav/favicon-16x16.png">
	<link rel="mask-icon" href="http://diyetisyentugbakopan.com/wp-content/uploads/elementor/thumbs/logoggog-p83c9pzpexnowh8gmeqjpx7t4up26mvrteyi94ten0.jpg" color="#fa7070">

	<meta name="msapplication-TileColor" content="#fa7070">
	<meta name="theme-color" content="#fa7070">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="/front/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/front/dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="/front/dependencies/swiper/css/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="/front/dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="/front/dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="/front/dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
	<link rel="stylesheet" href="/front/dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="/front/assets/css/app.css" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">


</head>

<body id="home-version-1" class="home-color-two" data-style="default">

	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<div class="page-loader">
		<div class="loader">
			<!-- Loader -->
			<div class="blobs">
				<div class="blob-center"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>

		</div>
	</div><!-- /.page-loader -->

	<div id="main_content">


		<!--=========================-->
		<!--=        Navbar         =-->
		<!--=========================-->
		<!-- /.site-header -->

		<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
		@yield('content')
		<!-- /.newsletter -->

		<!--=========================-->
		<!--=        Footer         =-->
		<!--=========================-->
		<footer id="footer" class="footer-two">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<form action="{{route('getContact')}}" method="GET" class="newsletter-form wow pixFadeUp"  style="animation-name: pixFadeUp;">
							<div class="newsletter-inner">
								<input type="email" name="email" class="form-control" id="newsletter-form-email" placeholder="Email" required="">
								<button type="submit" name="Gönder" id="newsletter-submit" class="newsletter-submit">
									<span>Gönder</span>
									
								</button>
							</div>
							<!-- /.newsletter-inner -->


							<!-- /.form-result-->
						</form>
					</div>
					<!-- /.col-lg-7 -->
					<!-- /.row -->
					<!-- /.col-lg-3 col-md-6 -->


					<div class="col-lg-3 col-md-6">
						<div class="widget footer-widget">
							<h3 class="widget-title">Site Haritası</h3>

							<ul class="footer-menu">
								<li><a href="{{route('getAbout')}}">Hakkımızda</a></li>
								<li><a href="{{route('getBlog')}}">Blog</a></li>
								<li><a href="{{route('getFaq')}}">SSS</a></li>
								<li><a href="{{route('getOnlineDiet')}}">Online Diyet</a></li>
								<li><a href="{{route('getContact')}}">İletişim</a></li>
							</ul>
						</div>
						<!-- /.widget footer-widget -->
					</div>
					<!-- /.col-lg-3 col-md-6 -->

					<div class="col-lg-3 col-md-6">
						<div class="widget footer-widget">
							<h3 class="widget-title">Adresimiz</h3>

							<p>
								Turkey
								<div class="info phone">
									<i class="ei ei-icon_phone"></i>
									<span>
										055555555

									</span>
								</div>
							</p>

							<ul class="footer-social-link">
								<li><a href="{!!setting()->get('facebookaddress')!!}"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="{!!setting()->get('twitteraddress')!!}"><i class="fab fa-twitter"></i></a></li>
								<li><a href="{!!setting()->get('instagramaddress')!!}"><i class="fab fa-instagram"></i></a></li>
								<li><a href="{!!setting()->get('linkedinaddress')!!}"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<!-- /.widget footer-widget -->
					</div>
					<!-- /.col-lg-3 col-md-6 -->
				</div>
				<!-- /.row -->

			</div><!-- /.footer-inner -->

			<div class="site-info">
				<div class="container text-center">
					<div class="footer__bottom_text mt-20 footercopyright text-dark">Copyright ©️ Lateness  | Created by <a href="https://nurkoc.godaddysites.com/">Nur Koç</a></div>
			</div>
		</div>


		<div class="scroll-circle wow fadeInUp">
			<img src="/front/media/background/circle10.png" alt="circle6" data-parallax='{"y" : 50}'>
		</div>
	</footer><!-- /#footer -->


</div><!-- /#site -->

<!-- Dependency Scripts -->
<script src="/front/dependencies/jquery/jquery.min.js"></script>
<script src="/front/dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="/front/dependencies/swiper/js/swiper.min.js"></script>
<script src="/front/dependencies/jquery.appear/jquery.appear.js"></script>
<script src="/front/dependencies/wow/js/wow.min.js"></script>
<script src="/front/dependencies/countUp.js/countUp.min.js"></script>
<script src="/front/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/front/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/front/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
<script src="/front/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="/front/dependencies/gmap3/js/gmap3.min.js"></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&#038;ver=2.1.6'></script>

<!-- Site Scripts -->
<script src="/front/assets/js/header.js"></script>
<script src="/front/assets/js/app.js"></script>

</body>

</html>