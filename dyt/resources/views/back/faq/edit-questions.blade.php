@extends('back.layout.master')
@section('content')
<div class="main-content">

	<div class="row">
		<div class="col-md-12 col-lg-12">
			<div class="card card-outline-secondary">
				<h4 class="card-title"><strong>Soru Düzenle </strong></h4>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="card-body">
							{!!BootForm::open([ 'method' => 'POST', 'route' => 'postEditFAQ' ])->enctype("multipart/form-data")!!}
							{!!BootForm::bind($faq)!!}
							{!!BootForm::hidden('id')!!}
							

							


							<div class="row" style="margin-bottom: 5px;">
								<div class="col-md-2" style="text-align: right;">
									<label><strong>Soru Başlık</strong></label>
								</div>
								<div class="col-md-10">
									<input type="text" name="soru_baslik" class="form-control" value="{{$faq->soru_baslik}}">
								</div>
							</div>

							<div class="row" style="margin-bottom: 5px;">
								<div class="col-md-2" style="text-align: right;">
									<label><strong>Soru Açıklama</strong></label>
								</div>
								<div class="col-md-10">
									<textarea class="form-control" name="soru_aciklama">{{$faq->soru_aciklama}}</textarea>                 
								</div>
							</div>

						<!--	
						<div class="row" style="margin-bottom: 5px;">
								<div class="col-md-2" style="text-align: right;">
									<label><strong>Cevap</strong></label>
								</div>
								<div class="col-md-10">
									<textarea class="form-control" name="cevap"></textarea>                 
								</div>
							</div>
						-->




							<div class="row" style="margin-bottom: 15px; margin-top: 15px ; float: right;">
								<input type="submit" name="Kaydet" value="Kaydet" class="btn btn-success" >

							</div>



							{!!BootForm::close()!!}
						</div>
					</div>
					<div class="col-md-2"> </div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection







