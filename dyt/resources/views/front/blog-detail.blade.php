	@extends('front.layout.master')
	@section('content')
	@include('front.layout.header')

	<section class="blog-single">
		<section class="layout-pt-lg layout-pb-lg">
			<div class="container">

				<div class="masonry -col-5 -gap-32 js-masonry js-masonry-no-filter js-masonry-update">
					<div class="masonry__sizer"></div>

					@foreach($allblog as $blog)

					<div class="container">
						<div class="masonry__item -no-ratio">
							<div>
								<a href="{{route('getBlogDetail',array('blog_slug'=>$blog->blog_slug))}}" class="d-block relative">
									<img class="initial-img rounded-12" src="{{asset('/storage/blog-image/'.$blog->image)}}" alt="image">

								</a>

								<div class="mt-50">
									<a href="#" class="d-block decoration-none mb-8">{{$blog->created_at->format('d-m-Y')}}</a>
									<h3 class="text-xl lh-16 fw-600">{{$blog->blog_baslik}}</h3>
									<p>{{$blog->blog_icerik}}</p>

								</div>
								<div class="container">
								</div>
							</div>
						</div>
					</div>

					@endforeach


				</div>
			</div>
		</section>
	</section>

	@endsection