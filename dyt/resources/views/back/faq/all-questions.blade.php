@extends('back.layout.master')
@section('content')
<div class="main-content">
	<div class="card">
		<header class="card-header">
			<h4 class="card-title"><strong>Tüm Sorulan Sorular </strong></h4>
			<a href="{{route('postCreateFAQ')}}" class="btn btn-sm btn-primary">Soru Ekle</a>
		</header>
		<div class="card-body">
			<table class="table table-bordered">
				<thead class="thead-light">
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Soru Başlık</th>
					
					<!--	<th class="text-center">Cevap</th>-->
						
						<th class="text-center">İşlemler</th>
					</tr>
				</thead>
				<tbody>

					@foreach($faq as $f)
					<tr>
						<td class="text-center">{{$f->id}}</td>
						<td class="text-center">{{$f->soru_baslik}}</td>
						
					<!-- <td>{{$f->cevap}}</td>-->
						

						<td class="text-center">
							<button data-provide="modaler" data-title="{{$f->soru_baslik}} 	" data-size="lg" data-confirm-visible="false" data-url="{{route('getFAQDetail',array('id'=>$f->id))}}" class="btn btn-sm btn-info">İçerik </button>
							<a class="btn btn-sm btn-warning" href="{{route('getEditFAQ',array('id'=>$f->id))}}">Düzenle</a> 
							<a class="btn btn-sm btn-danger" href="{{route('getDeleteFAQ',array('id'=>$f->id))}}"  onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>

						</td>
					</tr>

					@endforeach
	
				</tr>
			</tbody>
		</table>
		{{$faq->appends(Request::all())->links()}}
	</div>
</div>
@if($faq->count() == 0)
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
