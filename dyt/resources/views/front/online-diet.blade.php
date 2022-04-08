@extends('front.layout.master')
@section('content')
@include('front.layout.header')

<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">Online Diyet</h1>

			<ul class="bradcurmed">
				<li><a href="{{route('getIndex')}}" rel="noopener noreferrer">Anasayfa</a></li>
				<li>Online Diyet</li>
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
		<div class="col-md-12">
			<div class="contact-froms">
				<form action="{{route('postOnlineDiet')}}" method="POST" >
					@csrf
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="ad" placeholder="Ad" required="">
						</div>

						<div class="col-md-6">
							<input type="text" name="soyad" placeholder="Soyad" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="email" name="email" placeholder="E-mail" required="">

						</div>
						<div class="col-md-6">
							<input type="text" name="telefon" placeholder="Telefon Numarası" required="">

						</div>
					</div>		
					<div class="row">
						<div class="col-md-6">
							<select name="cinsiyet"   data-provide="selectpicker" data-live-search="true" data-size="5" placeholder="Cinsiyet" required="" >
								@foreach($cinsiyet as $c)
								<option value="{{$c->id}}">{{$c->value}}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6">
							<input type="text" name="meslek" placeholder="Meslek" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="yas" placeholder="Yaş" required="">
						</div>

						<div class="col-md-6">
							<input type="text" name="boy" placeholder="Boy" required="">
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="kilo" placeholder="Kilo" required="">
						</div>

						<div class="col-md-6">
							<input type="text" name="hedef_kilo" placeholder="Hedef Kilo" required="">
						</div>
					</div>	

					<button type="submit" class="pix-btn submit-btn">Bize Gönder</button>

				</form>
				<!-- /.contact-froms -->
			</div>
			<!-- /.faq-froms -->
		</div>
	</div>
</section>
@endsection