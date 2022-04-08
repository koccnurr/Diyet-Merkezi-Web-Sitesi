@extends('back.layout.master')
@section('content')
<div class="main-content">
	<div class="card">
		<header class="card-header">
			<h4 class="card-title"><strong>Tüm Talep Mesajları</strong></h4>
		</header>
		<div class="card-body">
			<table class="table table-bordered">
				<thead class="thead-light">
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Adı Soyadı</th>
						<th class="text-center">E-mail</th>
						<th class="text-center">Telefon</th>						
						<th class="text-center">Cinsiyet</th>						
						<th class="text-center">Meslek</th>						
						<th class="text-center">Yaş</th>						
						<th class="text-center">Boy</th>						
						<th class="text-center">Kilo</th>						
						<th class="text-center">Hedef Kilo</th>						
						<th class="text-center">İşlemler</th>
					</tr>
				</thead>
				<tbody>

					@foreach($message as $f)
					<tr>
						<td class="text-center">{{$f->id}}</td>
						<td class="text-center">{{$f->ad}}   {{$f->soyad}}</td>
						<td class="text-center">{{$f->email}}</td>
						<td class="text-center">{{$f->telefon}}</td>
						<td class="text-center">{{$f->cinsyt->value}}</td>
						<td class="text-center">{{$f->meslek}}</td>
						<td class="text-center">{{$f->yas}}</td>
						<td class="text-center">{{$f->boy}}</td>
						<td class="text-center">{{$f->kilo}}</td>
						<td class="text-center">{{$f->hedef_kilo}}</td>
						<td class="text-center">
							<a class="btn btn-sm btn-danger" href="{{route('getDeleteTalep',array('id'=>$f->id))}}"  onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>

						</td>
					</tr>

					@endforeach

				</tr>
			</tbody>
		</table>
		{{$message->appends(Request::all())->links()}}
	</div>
</div>
@if($message->count() == 0)
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