<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hizmetler;
use App\Models\Message;
use App\Models\OnlineDiet;
use App\Models\Cinsiyet;
use App\Models\Blog;
use App\Models\FAQ;
use Storage;
use SEO;
use Intervention\Image\Facades\Image;


class SiteController extends Controller
{
  public function getIndex(Request $request)
  {
    $hizmet=Hizmetler::all();
    $blog=Blog::all();
    $detailblog = Blog::where('blog_slug', $request->blog_slug)->first();

    return view('front.index',compact('hizmet','blog','detailblog'));
  }
  public function getAbout(Request $request)
  {
    return view('front.about');
  }
  public function getBlog(Request $request)
  {
    $blog=Blog::all();
    return view('front.blog',compact('blog','request'));
  }
  public function getFaq(Request $request)
  {
    $sss=FAQ::all();
    return view('front.sss',compact('sss'));
  }
  public function getOnlineDiet(Request $request)
  {
    $cinsiyet=Cinsiyet::all();
    $message=OnlineDiet::all();
    return view('front.online-diet',compact('cinsiyet','message','request'));
  }
  public function postOnlineDiet(Request $request)
  {
    $message=new OnlineDiet();
    $message->create($request->all());
    return redirect()->back()->with('success','Başarıyla Gönderildi');
  }
  public function getContact(Request $request)
  {
    $eposta = $request->email;

    return view('front.iletisim',compact('eposta'));
  }
  public function postCreateMessage(Request $request)
  {
    $message = new  Message();
    $message->create($request->all());
    return redirect()->back()->with('success','Başarıyla Eklendi');
  }
  public function getBlogDetail(Request $request) {

    $allblog = Blog::all();

    $detailblog = Blog::where('blog_slug', $request->blog_slug)->first();
    SEO::setTitle($detailblog->blog_baslik);
    return view('front.blog-detail', compact('detailblog', 'allblog'));

  }

}
