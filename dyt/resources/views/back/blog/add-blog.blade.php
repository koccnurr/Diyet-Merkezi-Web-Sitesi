@extends('back.layout.master')
@section('content')
<div class="main-content">

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<div class="card card-outline-secondary">
				<h4 class="card-title"><strong>Blog Ekle </strong></h4>
				<div class="card-body">
					{!!BootForm::open([ 'method' => 'POST', 'route' => 'postAddBlog' ])->enctype("multipart/form-data")!!}
					{!!BootForm::text('Blog Başlık', 'blog_baslik', null, ['required' => '', 'placeholder' => 'Blog Başlık'])!!}
					{!!BootForm::textarea('Blog İçerik','blog_icerik')!!}
					<div class="col-md-10">
						<label>Resim</label>
						<input type="file" name="image" id="image" class="form-control" placeholder=" Resim">

					</div>
					<input type="submit" name="Kaydet" value="Kaydet" class="btn btn-success" style="float: right;">
					{!!BootForm::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection