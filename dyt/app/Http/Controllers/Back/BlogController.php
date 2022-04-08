<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use SEO;
use Storage;

class BlogController extends Controller {
    public function getAllBlog(Request $request) {
        SEO::setTitle('Tüm Bloglar');

        $blog = Blog::all();
        return view('back.blog.all-blog', compact('blog', 'request'));
    }
    public function getAddBlog(Request $request) {
        SEO::setTitle('Blog Ekle');

        return view('back.blog.add-blog');
    }
    public function postAddBlog(Request $request) {
        $blog = new Blog();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());

            $img->stream();
            Storage::disk('public')->put('blog-image' . '/' . $fileName, $img, 'public');

            $request['image'] = $fileName;
            $blog->image = $fileName;

        }

        $blog->blog_baslik = $request->blog_baslik;
        $blog->blog_icerik = $request->blog_icerik;
        $blog->save();


        return redirect()->route('getAllBlog')->with('success', 'Başarıyla Eklemiştir.');



    }

    public function getEditBlog(Request $request) {
        SEO::setTitle('Blog Düzenle');

        $blog = Blog::find($request->id);
        return view('back.blog.edit-blog', compact('blog'));
    }
    public function postEditBlog(Request $request) {

        $blog = Blog::find($request->id);
        if ($request->hasFile('blog')) {
            $image = $request->file('blog');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());

            $img->stream();
            Storage::disk('public')->put('blog-image' . '/' . $fileName, $img, 'public');

            $request['image'] = $fileName;
            $blog->image = $fileName;

        }

        $blog->blog_baslik = $request->blog_baslik;
        $blog->blog_icerik = $request->blog_icerik;
        $blog->save();
        return redirect()->route('getAllBlog')->with('success', 'Başarıyla Güncellenmiştir.');

    }
    public function getDeleteBlog(Request $request) {
        $blog = Blog::find($request->id);
        $blog->delete();
        return redirect()->route('getAllBlog')->with('success', 'Başarıyla Silindi.');
    }
    public function getDetailBlog(Request $request) {
        $blog = Blog::find($request->id);
        return view('back.blog.detail', compact('blog'));

    }



}
