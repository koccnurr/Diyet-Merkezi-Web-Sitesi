@extends('front.layout.master')
@section('content')
@include('front.layout.header')

<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">Hakkımızda</h1>

			<ul class="bradcurmed">
				<li><a href="{{route('getIndex')}}" rel="noopener noreferrer">Anasayfa</a></li>
				<li>Hakkımızda</li>
			</ul>
		</div>
		<!-- /.page-title-wrapper -->
	</div>
	<!-- /.container -->


	<svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
		<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
	</svg>

	<ul class="animate-ball">
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
	</ul>
</section>
<!-- /.page-banner -->

<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="about-content">
					<div class="section-title">
						<h3 class="sub-title wow pixFadeUp"></h3>
						<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
							Tuğba Kopan Kimdir?
						</h2>
					</div>
					<!-- /.section-title -->

					<p class="description wow pixFadeUp" data-wow-delay="0.4s">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros sem, sagittis a mi nec, tempus tempor elit. Nullam leo dolor, suscipit sed lectus nec, feugiat viverra odio. In diam nisi, placerat laoreet ligula et, viverra semper dui. Nunc malesuada, neque vel varius lobortis, urna enim molestie dui, eu feugiat nisi lorem id augue. Sed euismod ultrices consectetur. Vivamus non sem leo. Curabitur ultricies diam quis metus bibendum, vitae facilisis tortor posuere. Aliquam erat volutpat. In urna sem, malesuada ut justo vitae, dictum tincidunt erat.

						

					</p>


					<!-- /.singiture -->
				</div>
				<!-- /.about-content -->
			</div>
			<!-- /.col-lg-7 -->

			<div class="col-lg-5">
				<div class="about-thumb wow pixFadeRight" data-wow-delay="0.6s">
					<img src="https://img-16.stickers.cloud/packs/f6d10236-5ce1-41ea-add9-e17e9659f7d9/webp/268f30c4-f0e3-4632-9227-8366082b7159.webp" alt="about">
				</div>
				<!-- /.about-thumb -->
			</div>
			<!-- /.col-lg-5 -->
		</div>
		<br>
		
	</div>
	<!-- /.container -->
</section>
@endsection