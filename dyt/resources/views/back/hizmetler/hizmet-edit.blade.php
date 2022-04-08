@extends('back.layout.master')
@section('content')
<div class="main-content">

	<div class="row">
		<div class="col-md-12 col-lg-12">
			<div class="card card-outline-secondary">
				<h4 class="card-title"><strong>Hizmet Düzenle </strong></h4>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="card-body">
							{!!BootForm::open([ 'method' => 'POST', 'route' => 'postEditHizmetler' ])->enctype("multipart/form-data")!!}
							{!!BootForm::bind($hizmet)!!}
							{!!BootForm::hidden('id')!!}
							

							


							{!!BootForm::text('Hizmet Adı', 'adi', null, ['required' => '', 'placeholder' => 'Hizmet Adı'])!!}

							<div class="col-md-10">
								<label>Resim</label>
								<input type="file" name="resim" id="resim" class="form-control" placeholder=" Resim">

							</div>

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







