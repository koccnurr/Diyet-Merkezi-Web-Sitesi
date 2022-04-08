@extends('back.layout.master')
@section('content')
<div class="main-content">
	{!!BootForm::open([ 'method' => 'POST', 'route' => 'postFooterSetting' ]) !!}
	{!!BootForm::bind($settings)!!}

		<div class="card">
			<header class="card-header">
				<h4 class="card-title"><strong>İletişim Ayarları</strong></h4>
			</header>
			<div class="card-body">

				{!!BootForm::text('E-posta', 'eposta', null, ['required' => '', 'placeholder' => 'E-posta'])!!}
				{!!BootForm::text('İletişim Numarası', 'contact_no', null, ['required' => '', 'placeholder' => 'İletişim Numarası'])!!}
				{!!BootForm::text('Ofis Adresi', 'office_adres', null, ['required' => '', 'placeholder' => 'Ofis Adres'])!!}
			</div>
		</div>
		<div class="card">
			<header class="card-header">
				<h4 class="card-title"><strong> Footer Ayarları</strong></h4>
			</header>
			<div class="card-body">
				{!!BootForm::text('Footer Açıklama', 'footer_aciklama', null, ['required' => '', 'placeholder' => 'Footer Açıklama'])!!}
			</div>
		</div>
		<div class="card">
			<header class="card-header">
				<h4 class="card-title"><strong>Sosyal Medya Adresleri</strong></h4>
			</header>
			<div class="card-body">

				<div class="row">
					<div class="col-sm-6"> {!!BootForm::text('Facebook', 'facebookaddress')!!}</div>
					<div class="col-sm-6">{!!BootForm::text('Twitter', 'twitteraddress')!!}</div>
				</div>
				<div class="row">
					<div class="col-sm-6">{!!BootForm::text('Linkedin', 'linkedinaddress')!!}</div>
					<div class="col-sm-6">{!!BootForm::text('Instagram', 'instagramaddress')!!}</div>
				</div>
				<input type="submit"  class="btn btn-success" style="float: right;">
				{!!BootForm::close()!!}
			</div>

		</div>
	</div>

	@endsection