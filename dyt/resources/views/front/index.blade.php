	@extends('front.layout.master')
	@section('content')
	<header class="site-header header-two header_trans-fixed" data-top="992">
		<div class="container">
			<div class="header-inner">
				<div class="site-mobile-logo">
					<a href="{{route('getIndex')}}" class="logo">
						<img src="/logo/logo.png" alt="site logo" class="main-logo">
						<img src="/logo/logo.png" alt="site logo" class="sticky-logo">

					</a>
				</div><!-- /.site-mobile-logo -->

				<div class="toggle-menu">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
				<!-- /.toggle-menu -->
				<nav class="site-nav nav-two">
					<div class="close-menu">
						<span>Close</span>
						<i class="ei ei-icon_close"></i>
					</div>

					<div class="site-logo">
						<a href="{{route('getIndex')}}" class="logo">
							<img src="/logo/logo.png" alt="site logo" class="main-logo">
							<img src="/logo/logo.png" alt="site logo" class="sticky-logo">
						</a>
					</div>


					<div class="menu-wrapper" data-top="992">
						<ul class="site-main-menu">
							<li class="menu-item-has-children"  >
								<a href="{{route('getIndex')}}"  style="color: #2b2350;" >Anasayfa</a>
							</li>
							<li  ><a href="{{route('getAbout')}}"  style="color: #2b2350;" >Hakkımızda</a></li>
							<li class="menu-item-has-children" >
								<a href="{{route('getBlog')}}"  style="color: #2b2350;" >Blog</a>
							</li>

							<li class="menu-item-has-children" >
								<a href="{{route('getFaq')}}"  style="color: #2b2350;" >SSS</a>
							</li>

							<li ><a href="{{route('getOnlineDiet')}}"  style="color: #2b2350;" >Online Diyet</a></li>
						</ul>

						<div class="nav-right">
							<a href="{{route('getContact')}}" class="nav-btn" style="color: #2b2350;"  >İletişim</a>
						</div>
					</div>
					<!-- /.menu-wrapper -->
				</nav><!-- /.site-nav -->

			</div><!-- /.header-inner -->
		</div><!-- /.container -->
	</header>
	<section class="banner banner-two">
		<div class="vector-bg"><img src="/front/media/banner/top shape.png" alt="circle"></div>
		<div class="container">
			<div class="banner-content-wrap">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-content">
							<h1 class="banner-title wow pixFadeUp" data-wow-delay="0.3s">
								Lateness <span>Sağlıklı<br>
								Yaşam</span> Merkezi<br>
								
							</h1>
							<a href="{{route('getContact')}}" class="pxs-btn banner-btn color-two wow pixFadeUp" data-wow-delay="0.6s">Bizimle Tanışmaya Ne Dersiniz?</a>
						</div><!-- /.banner-content -->
					</div><!-- /.col-md-5 -->

					<div class="col-lg-6">
						<div class="animate-promo-mockup">

							<img src="https://www.fedbox.com.tr/UploadImages/crop_11bcbaf5-6f01-423d-aa22-9c7793afef0b_l.jpg" class="wow pixFadeRight" data-wow-delay="0.3s" data-wow-duration="1s" alt="mpckup">
							<img src="/front/media/banner/cloud_01.png" alt="mpckup">
							<img src="/front/media/banner/cloud_02.png" alt="mpckup">
							<img src="/front/media/banner/cloud_03.png" alt="mpckup">
						</div><!-- /.promo-mockup -->
					</div><!-- /.col-md-7 -->
				</div><!-- /.row -->
			</div><!-- /.banner-content-wrap -->
		</div><!-- /.container -->
	</section><!-- /.banner banner-two -->

	<!--===========================-->
	<!--=         Feature         =-->
	<!--===========================-->
	<section id="brand-logo">
		<div class="section-small text-center wow pixFadeUp">
			<h2 class="title">SERTİFİKALAR</h2>
		</div>
		<div class="container">
			<div class="swiper-container logo-carousel wow pixFadeUp" data-wow-delay="0.3s" id="logo-carousel" data-perpage="6" data-breakpoints='{"1024": {"slidesPerView": 4}, "768": {"slidesPerView": 4}, "640": {"slidesPerView": 3}}'>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="brand-logo"><img src="/front/media/brand/1.png" alt="brand"></div>
					</div>
					<!-- /.swiper-slide -->

					<div class="swiper-slide">
						<div class="brand-logo"><img src="/front/media/brand/2.png" alt="brand"></div>
					</div>
					<!-- /.swiper-slide -->

					<div class="swiper-slide">
						<div class="brand-logo"><img src="/front/media/brand/3.png" alt="brand"></div>
					</div>
					<!-- /.swiper-slide -->

					<div class="swiper-slide">
						<div class="brand-logo"><img src="/front/media/brand/4.png" alt="brand"></div>
					</div>
					<!-- /.swiper-slide -->

					<div class="swiper-slide">
						<div class="brand-logo"><img src="/front/media/brand/5.png" alt="brand"></div>
					</div>
					<!-- /.swiper-slide -->

					<div class="swiper-slide">
						<div class="brand-logo"><img src="/front/media/brand/6.png" alt="brand"></div>
					</div>
					<!-- /.swiper-slide -->
				</div>
				<!-- /.swiper-wrapper -->
			</div>
			<!-- /#logo-carousel.swiper-container logo-carousel -->
		</div>
		<!-- /.container -->

	</section>
	<!-- /.brand-logo -->

	<!--===========================-->
	<!--=         Feature         =-->
	<!--===========================-->
	<section class="featured-two-same">
		<div class="container">
			<div class="section-title color-two text-center">
				<h3 class="sub-title wow pixFadeUp">HİZMETLERİMİZ</h3>
				<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">LATENESS</h2>
			</div><!-- /.section-title -->

			<div class="row">
				@foreach($hizmet as $h)

				<div class="col-lg-4 col-md-6">
					<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
						<div class="saaspik-icon-box-icon">
							<img class="w-30px" src="{{url('storage/hizmet-resim/'.@$h->resim)}}">
						</div>
						<div class="pixsass-icon-box-content">
							<h3 class="pixsass-icon-box-title">{{$h->adi}}</h3>
							<p>
								The full monty do one nancy boy<br>
								say gutted mate cockup Why at <br>
								public school.!
							</p>
						</div>
					</div><!-- /.pixsass-box style-two -->
				</div><!-- /.col-lg-4 col-md-6 -->
				@endforeach

			</div><!-- /.row -->
		</div><!-- /.container -->

		<div class="scroll-circle wow pixFadeRight">
			<img src="/front/media/background/circle.png" data-parallax='{"y" : -230}' alt="circle">
		</div>
	</section><!-- /.featured -->

	<!--=================================-->
	<!--=         Revolutionize         =-->
	<!--=================================-->
	<section class="revolutionize-two">
		<div class="bg-angle"></div>
		<div class="container">
			<div class="section-title dark-title text-center">
				<h3 class="sub-title wow pixFadeUp">Sağlıklı Yaşam</h3>
				<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
					Misyon ve Vizyon

				</h2>
			</div><!-- /.section-title dark-title -->

			<div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
				<ul id="pix-tabs-nav" class="pix-tab-two">
					<li><a href="#tab1">Spor</a></li>
					<li><a href="#tab2">Diyet</a></li>
					<li><a href="#tab3">Andulasyon </a></li>
				</ul> <!-- tabs-nav -->

				<div id="pix-tabs-content">
					<div id="tab1" class="content color-two">
						<img src="https://i.lezzet.com.tr/images-xxlarge-secondary/yemekten-sonra-neden-spor-yapilmaz-3ab15faf-42f8-4717-89a2-0b172c4cdd05.jpg" alt="revolutionize"  style="width: 900px;height: 600px;">

						<div class="shape-shadow"></div>
					</div>
					<div id="tab2" class="content color-two">
						<img src="https://foto.haberler.com/haber/2019/10/02/diyet-yemekleri-saglikli-sekilde-zayiflatan-12486709_9214_amp.jpg" alt="revolutionize" style="width: 900px;height: 600px;">
						<div class="shape-shadow"></div>
					</div>
					<div id="tab3" class="content color-two">
						<img src="https://www.drhalilhalil.com/KalpDoktoruIzmir/Icerik/andulasyon-28-12-2018-.jpg" alt="revolutionize" style="width: 900px;height: 600px;">
						<div class="shape-shadow"></div>
					</div>
				</div> <!-- tabs-content -->
			</div> <!-- Tabs -->
		</div><!-- /.container -->
	</section><!-- /.revolutionize -->

	<!--=================================-->
	<!--=         Editor Design         =-->
	<!--=================================-->


	<!--===================================-->
	<!--=         Genera Informes         =-->
	<!--===================================-->
	<section class="genera-informes-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pix-order-two">
					<div class="genera-informes-content">
						<div class="section-title style-two">
							<h2 class="title wow pixFadeUp">
								Neden Biz?<br>
							</h2>

							<p class="wow pixFadeUp" data-wow-delay="0.3s">
								Disiplinli ve azimli hocalarımızla sizlere hizmet vermekten mutluyuz.
							</p>
						</div><!-- /.section-title style-two -->

						<ul class="list-items color-two wow pixFadeUp" data-wow-delay="0.4s">
							<li>Güler Yüz</li>
							<li>Hijyenik Ortam</li>
							<li>Aile Seansları</li>
							<li>Birebir Seanslar</li>
							<li>7/24 İletişim</li>
						</ul>

						<a href="{{route('getContact')}}" class="pix-btn btn-outline-two wow pixFadeUp" data-wow-delay="0.5s">Hadi Başlayalım</a>
					</div>
					<!-- /.genera-informes -->

				</div><!-- /.col-lg-6 -->

				<div class="col-lg-6">
					<div class="animaated-elements-two">
						<img src="https://www.fitklinik.com/wp-content/uploads/elementor/thumbs/Ana-sayfa-acilis-gorseli-p6r5ixf8r6zs7t1yueljzxtfudg887t77yquznwlmw.png" class="elm-one wow pixFade" alt="informes">
					</div>
				</div><!-- /.col-lg-6 -->

			</div><!-- /.row -->
		</div><!-- /.container -->

		<div class="scroll-circle wow pixFadeRight">
			<img src="/front/media/background/circle2.png" data-parallax='{"y" : 180}' alt="circle">
		</div>
	</section><!-- /.genera-informes -->

	<section class="countup">
		<div class="bg-map" data-bg-image="/front/media/background/map.png">

		</div>
		<div class="container">
			<div class="section-title color-two text-center">
				<h3 class="sub-title wow pixFadeUp">Kaç kişiyiz</h3>
				<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
					Ekibimiz
				</h2>
			</div>
			<!-- /.section-title -->

			<div class="countup-wrapper">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="fun-fact wow pixFadeUp" data-wow-delay="0.3s">
							<div class="counter">
								<h4 class="count" data-counter="5">5 </h4>
							</div>
							<!-- /.counter -->

							<p>Kadın Antronör</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.col-lg-3 col-md-6 col-sm-6 -->

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="fun-fact color-two wow pixFadeUp" data-wow-delay="0.5s">
							<div class="counter">
								<h4 class="count" data-counter="3">3 </h4>
							</div>
							<!-- /.counter -->
							<p>Erkek Antronör</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.col-lg-3 col-md-6 col-sm-6 -->

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="fun-fact color-three wow pixFadeUp" data-wow-delay="0.7s">
							<div class="counter">
								<h4 class="count" data-counter="500">500 </h4>
							</div>
							<!-- /.counter -->
							<p>Danışanlarımız</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.col-lg-3 col-md-6 col-sm-6 -->

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="fun-fact color-four wow pixFadeUp" data-wow-delay="0.9s">
							<div class="counter">
								<h4 class="count" data-counter="1">1 </h4>
							</div>
							<!-- /.counter -->
							<p>Şubemiz</p>
						</div>
						<!-- /.fun-fact -->
					</div>
					<!-- /.col-lg-3 col-md-6 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.countup-wrapper -->

			<!-- /.button-container -->
		</div>
		<!-- /.container -->

		<div class="scroll-circle wow pixFadeRight">
			<img src="/front/media/background/circle3.png" data-parallax='{"y" : -230}' alt="circle">
		</div>
	</section>
	<!-- /.countup -->

	<!--=======================-->
	<!--=         Blog        =-->
	<!--=======================-->
	<section id="blog-grid">
		<div class="container">
			<div class="section-title color-two text-center">
				<h3 class="sub-title wow pixFadeUp">Bloglar</h3>
				<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
					Sağlıklı Yaşam
				</h2>
			</div>
			<div class="row">
				@foreach($blog as $b)

				<div class="col-lg-4 col-md-6">
					<article class="blog-post color-two wow pixFadeLeft" data-wow-delay="0.4s">
						<div class="feature-image">
							<a href="{{route('getBlogDetail',array('blog_slug'=>$b->blog_slug))}}" >

								<img class="w-30px" src="{{url('storage/blog-image/'.@$b->image)}}"  alt="blog-thumb">

							</a>
						</div><!-- /.feature-image -->
						<div class="blog-content">
							<ul class="post-meta">
								<li>{{$b->created_at}}</li>
							</ul>

							<h3 class="entry-title">
								{{$b->blog_baslik}}
							</h3>

							<a href="#" class="post-author">
								<p>Tuğba Kopan</p>	
								
							</a>
						</div><!-- /.blog-content -->
					</article><!-- /.blog-post -->
				</div><!-- /.col-lg-4 col-md-6 -->


				@endforeach
			</div><!-- /.container -->


		</section><!-- /#blog-grid -->

		@endsection