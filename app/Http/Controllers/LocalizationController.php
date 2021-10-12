<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function lang_change(Request $request)
    {
        App::setlocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
