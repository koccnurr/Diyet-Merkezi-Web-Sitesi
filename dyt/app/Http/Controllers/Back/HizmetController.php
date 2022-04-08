<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hizmetler;
use Storage;
use Intervention\Image\Facades\Image;

class HizmetController extends Controller
{
    public function getAllHizmetler(Request $request)
    {
        $hizmet=Hizmetler::all();
        return view('back.hizmetler.all-hizmet',compact('hizmet'));
    }
    public function getCreateHizmetler(Request $request)
    {
        return view('back.hizmetler.hizmet-create');
    }
    public function postCreateHizmetler(Request $request)
    {
        $hizmet= new Hizmetler();

        if ($request->hasFile('resim')) {
            $image = $request->file('resim');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());

            $img->stream();
            Storage::disk('public')->put('hizmet-resim' . '/' . $fileName, $img, 'public');

            $request['resim'] = $fileName;
            $hizmet->resim = $fileName;

        }

        $hizmet->adi = $request->adi;
        $hizmet->save();

        return redirect()->route('getAllHizmetler')->with('success','Başarıyla Eklendi');
    }
    public function getEditHizmetler(Request $request)
    {
        $hizmet=Hizmetler::find($request->id);
        return view('back.hizmetler.hizmet-edit',compact('hizmet'));

    }
    public function postEditHizmetler(Request $request)
    {
        $hizmet=Hizmetler::find($request->id);
        if ($request->hasFile('resim')) {
            $image = $request->file('resim');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());

            $img->stream();
            Storage::disk('public')->put('hizmet-resim' . '/' . $fileName, $img, 'public');

            $request['resim'] = $fileName;
            $hizmet->resim = $fileName;

        }

        $hizmet->adi = $request->adi;
        $hizmet->save();
        return redirect()->route('getAllHizmetler')->with('success','Başarıyla Güncellenmiştir');

    }
    public function getDeleteHizmetler(Request $request)
    {
       $hizmet=Hizmetler::find($request->id);
       $hizmet->delete();
       return redirect()->route('getAllHizmetler')->with('success','Başarıyla Silindi');

   }
   public function getDetail(Request $request)
   {
    $hizmet = Hizmetler::find($request->id);
    return view('back.hizmetler.detail',compact('hizmet'));
}
}
