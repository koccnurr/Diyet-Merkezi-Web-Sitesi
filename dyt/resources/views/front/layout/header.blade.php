<header class="site-header header-two header_trans-fixed" data-top="992">
	<div class="container">
		<div class="header-inner">
			<div class="site-mobile-logo">
				<a href="{{route('getIndex')}}" class="logo">
					<img src="/logo/logo2.png" alt="site logo" class="main-logo"  style="height: 50px;">
					<img src="/logo/logo.png" alt="site logo" class="sticky-logo"  style="height: 50px;">

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
						<img src="/logo/logo2.png" alt="site logo" class="main-logo" style="height: 50px;">
						<img src="/logo/logo.png" alt="site logo" class="sticky-logo" style="height: 50px;">
					</a>
				</div>


				<div class="menu-wrapper" data-top="992">
					<ul class="site-main-menu">
						<li>
							<a href="{{route('getIndex')}}"  style="color: #2b2350;" >Anasayfa</a>
						</li>
						<li  ><a href="{{route('getAbout')}}"  style="color: #2b2350;" >Hakkımızda</a></li>
						<li>
							<a href="{{route('getBlog')}}"  style="color: #2b2350;" >Blog</a>
						</li>

						<li >
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