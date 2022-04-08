@extends('back.layout.master')
@section('content')
<div class="main-content">
	<div class="card">
		<header class="card-header">
			<h4 class="card-title"><strong>Tüm Hizmetler </strong></h4>
			<a href="{{route('postCreateHizmetler')}}" class="btn btn-sm btn-primary">Hizmet Ekle</a>
		</header>
		<div class="card-body">
			<table class="table table-bordered">
				<thead class="thead-light">
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Hizmet Adı</th>
						<th class="text-center">İmage</th>
						<th class="text-center">İşlemler</th>
					</tr>
				</thead>
				<tbody>

					@foreach($hizmet as $f)
					<tr>
						<td class="text-center">{{$f->id}}</td>
						<td class="text-center">{{$f->adi}}</td>
						
						<td class="text-center"> 
							<img class="w-30px" src="{{url('storage/hizmet-resim/'.@$f->resim)}}">

						</td>
						

						<td class="text-center">

							<a class="btn btn-sm btn-warning" href="{{route('getEditHizmetler',array('id'=>$f->id))}}">Düzenle</a> 
							<a class="btn btn-sm btn-danger" href="{{route('getDeleteHizmetler',array('id'=>$f->id))}}"  onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>

						</td>
					</tr>

					@endforeach

				</tr>
			</tbody>
		</table>
	</div>
</div>
@if($hizmet->count() == 0)
<div class="jumbotron jumbotron-fluid">
	<div class="container text-center">
		<h3>
			Veri Bulunamadı.
		</h3>
	</div>
</div>
@endif
</div>
</div>
@endsection
