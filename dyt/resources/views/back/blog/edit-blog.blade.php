@extends('back.layout.master')
@section('content')
<div class="main-content">
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="card card-outline-secondary">
        <h4 class="card-title"><strong>Blog Düzenle </strong></h4>
        <div class="card-body">
          {!!BootForm::open([ 'method' => 'POST', 'route' => 'postEditBlog' ])->enctype("multipart/form-data")!!}
          {!!BootForm::bind($blog)!!}
          {!!BootForm::hidden('id')!!}
          {!!BootForm::text('Blog Başlık', 'blog_baslik', null, ['required' => '', 'placeholder' => 'Blog Başlık'])!!}
          {!!BootForm::textarea('Blog İçerik','blog_icerik')->data('provide','summernote')!!}
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