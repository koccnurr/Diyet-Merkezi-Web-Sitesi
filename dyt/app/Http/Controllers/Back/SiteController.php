<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getDashboard(Request $request)
    {
      return view('back.admin.index');
    }
}
