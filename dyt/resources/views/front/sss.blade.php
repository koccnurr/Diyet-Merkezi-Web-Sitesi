@extends('front.layout.master')
@section('content')
@include('front.layout.header')
<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">Sık Sorulan Sorular</h1>

			<ul class="bradcurmed">
				<li><a href="{{route('getIndex')}}" rel="noopener noreferrer">Anasayfa</a></li>
				<li>SSS</li>
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
<section class="faqs">
	<div class="container">
		<div class="tabs-wrapper">
			<div class="faq-content">
					<div  class="faq faq-two pixFade">

						@foreach($sss as $s)
						<div class="card active">
							<div class="card-header">
								<h5>
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse00" aria-expanded="false" aria-controls="collapse00">
										{{$s->soru_baslik}}
									</button>
								</h5>
							</div>
							<div id="collapse00" class="collapse"  data-parent="" style="">
								<div class="card-body">
									<p>
										{{$s->soru_aciklama}}
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
			</div>
		</div>
		<div class="faq-forms">
			<div class="section-title text-center">
				<h3 class="sub-title">Sorularınız İçin</h3>

				<h2 class="title">Bize Ulaşın</h2>
			</div>
			<!-- /.section-title -->
			<form action="{{route('postCreateMessage')}}"  method="POST" class="faq-form">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="Adınız" name="name">
					</div>

					<div class="col-md-6">
						<input type="text" placeholder="Email" name="email">
					</div>
				</div>

				<input type="text" placeholder="Konu" name="subject">

				<textarea name="content" cols="30" rows="10" placeholder="Mesajınız" ></textarea>

				<button type="submit" class="pix-btn submit-btn">Gönder</button>
			</form>
			<!-- /.faq-form -->
		</div>
		<!-- /.faq-forms -->
	</div>
	<!-- /.container -->
</section>
@endsection