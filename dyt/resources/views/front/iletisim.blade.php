@extends('front.layout.master')
@section('content')
@include('front.layout.header')

<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">İletişim</h1>

			<ul class="bradcurmed">
				<li><a href="{{route('getIndex')}}" rel="noopener noreferrer">Anasayfa</a></li>
				<li>İletişim</li>
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
<section class="contactus">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contact-infos">
					<div class="contact-info">
						<h3 class="title">Konumumuz</h3>
						<p class="description">
							<br>Kilis/Merkez
						</p>

						<div class="info phone">
							<i class="ei ei-icon_phone"></i>
							<span>0 55 555 5555 </span>
						</div>
					</div>
					<!-- /.contact-info -->

					<div class="contact-info">
						<h3 class="title">Merhaba De</h3>
						<p class="description">
							<br>Kilis/Merkez
						</p>

						<div class="info">
							<i class="ei ei-icon_mail_alt"></i>
							<span>test@test</span>
						</div>
					</div>
					<!-- /.contact-info -->
				</div>
				<!-- /.contact-infos -->
			</div>
			<!-- /.col-md-4 -->
			<div class="col-md-8">
				<div class="contact-froms">
					<form action="{{route('postCreateMessage')}}"  method="POST" >
						@csrf
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Adınız Soyadınız" required="">
							</div>

							<div class="col-md-6">
								<input type="email" name="email" placeholder="Email" required @if(isset($eposta)) value="{{$eposta}}" @endif>
							</div>
						</div>

						<input type="text" name="subject" placeholder="Konu">

						<textarea name="content" placeholder="Mesajınız" required=""></textarea>

						<button type="submit" class="pix-btn submit-btn">Mesaj Gönder</button>

	
					</form>
					<!-- /.contact-froms -->
				</div>
				<!-- /.faq-froms -->
			</div>
			<!-- /.col-md-8 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>



@endsection