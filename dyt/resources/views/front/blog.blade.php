@extends('front.layout.master')
@section('content')
@include('front.layout.header')

<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">BLOG</h1>

			<ul class="bradcurmed">
				<li><a href="{{route('getIndex')}}" rel="noopener noreferrer">Anasayfa</a></li>
				<li>Blog</li>
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
<div class="blog-post-archive">
	<div class="container">


		<div class="row">
			@foreach($blog as $b)
			
			<div class="col-lg-4 col-md-6">
				<article class="post-post-grid">
					<div class="feature-image">
							<a href="{{route('getBlogDetail',array('blog_slug'=>$b->blog_slug))}}" class="d-block relative">
								<img src="{{url('storage/blog-image/'.@$b->image)}}" height="150px">
							</a>
						</div>
						<div class="blog-content">
							<ul class="post-meta">
								<li><a href="#">{{$b->created_at}}</a></li>
							</ul>

							<h3 class="entry-title"><a href="#">{!!$b->blog_baslik!!}</a></h3>

							<div class="author">
								<p>Nur Koç</p>	
							</div>

						</div><!-- /.post-content -->
					</article><!-- /.post -->
				</div>

				@endforeach
			</div>
			<!-- /.col-lg-4 -->
			<ul class="post-navigation">
				<li class="active">1</li>
				<li><a href="#">2</a></li>
				<li class="next"><a href="#"><i class="ei ei-arrow_carrot-right"></i></a></li>
			</ul>
		</div><!-- /.container -->
	</div>
	@endsection