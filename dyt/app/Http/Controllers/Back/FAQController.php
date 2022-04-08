<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use SEO;


class FAQController extends Controller
{
    public function getAllFAQ(Request $request)
    {
        SEO::setTitle('Sıkça Sorulan Sorular');
        $faq = FAQ::orderby('id','DESC')->paginate(10);
        return view('back.faq.all-questions',compact('faq','request'));

    }
    public function getCreateFAQ(Request $request)
    {       
        SEO::setTitle('Soru Ekle');
        return view('back.faq.create-questions');
    }
    public function postCreateFAQ(Request $request)
    {
     $faq = new  FAQ();
     $faq->create($request->all());
     return redirect()->route('getAllFAQ')->with('success','Başarıyla Eklendi');
 }
 public function getEditFAQ(Request $request)
 {	
     SEO::setTitle('Soru Düzenle');
     $faq = FAQ::find($request->id);
     return view('back.faq.edit-questions',compact('faq'));
 }
 public function postEditFAQ(Request $request)
 {
     $faq = FAQ::find($request->id);
     $faq->update($request->all());
     return redirect()->route('getAllFAQ')->with('success','Başarıyla Düzenlendi');
 }

 public function getDeleteFAQ(Request $request)
 {
    $faq = FAQ::find($request->id);
    $faq->delete();
    return redirect()->route('getAllFAQ')->with('success','Başarıyla Silindi');
}
public function getFAQDetail(Request $request)
{
    $detail = FAQ::find($request->id);
    return view('back.faq.faq-detail',compact('detail'));
}





}
