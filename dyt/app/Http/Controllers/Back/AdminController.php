<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

use Sentinel;
class AdminController extends Controller
{
    public function getLogin(Request $request) {
        return view('back.auth.login');
    }
    public function postLogin(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $login = Sentinel::authenticateAndRemember($credentials);

        if ($login == TRUE) {

           return redirect()->route('getIndex');

       } else {

        return redirect()->back();
    }
}

public function getLogOut(Request $request) {
  Sentinel::logout();
  return redirect()->route('getLogin');

}
}
