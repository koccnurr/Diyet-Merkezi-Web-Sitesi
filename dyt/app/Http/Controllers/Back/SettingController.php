<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Setting;
use Storage;
use Intervention\Image\Facades\Image;

use Anlutro\LaravelSettings\ServiceProvider;

class SettingController extends Controller
{
    public function getFooterSetting(Request $request)
    {
        $settings=Setting::all();

        return view('back.setting.footer',compact('settings'));
    }   
    public function postFooterSetting(Request $request)
    {
        $data = $request->except(['_token', '_method']);


        foreach ($data as $key => $value) {
            Setting::set($key, $value);
        }
        Setting::save();
        return redirect()->back()->with('success', 'Ayarlar Başarıyla Yüklendi...');
    }     

}
