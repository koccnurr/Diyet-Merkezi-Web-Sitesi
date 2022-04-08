@extends('back.layout.master')
@section('content')
<div class="main-content">

  <div class="card">
   <header class="card-header">
    <h4 class="card-title"><strong>Tüm Bloglar </strong></h4>
    <a href="{{route('getAddBlog')}}" class="btn btn-sm btn-primary">Blog Ekle</a>
  </header>

  <div class="card-body">
    <table class="table table-bordered">
      <thead class="thead-light">

        <tr>
          <th>#</th>
          <th class="text-center">Blog Başlık</th>
          <th class="text-center">Blog İçerik</th>
          <th class="text-center">Blog Resim</th>
          <th class="text-center">İşlemler</th>
          
        </tr>
      </thead>
      <tbody>


       @foreach($blog as $f)

       <tr class="text-center">
         <td class="text-center">{{$f->id}}</td>
         <td class="text-center">{{$f->blog_baslik}}</td>
         <td class="text-center">
          <img class="w-30px" src="{{url('storage/blog-image/'.@$f->image)}}">

        </td>
        <td class="text-center">    
          <button data-provide="modaler" data-title="{{$f->blog_baslik}}" data-size="lg" data-confirm-visible="false" data-url="{{route('getDetailBlog',array('id'=>$f->id))}}" class="btn btn-sm btn-info">İçerik </button>
        </td>
        <td class="text-center">
          <a class="table-action hover-primary" href="{{route('getEditBlog',array('id'=>$f->id))}}"  data-provide="tooltip" data-original-title="Düzenle"><i class="fa fa-edit"></i></a>
          <a class="table-action hover-danger" href="{{route('getDeleteBlog',array('id'=>$f->id))}}" onclick="return confirm('Silmek istediğinize emin misiniz ? ')" data-provide="tooltip" data-original-title="Sil"><i class="ti-trash"></i></a>



        </td>
      </tr>
      @endforeach
      <tr>
      </tr>
    </tbody>
  </table>
</div>
</div>
@if($blog->count() == 0)
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h3>
      Veri Bulunamadı.

    </h3>
  </div>
</div>
@endif
</div>


@endsection