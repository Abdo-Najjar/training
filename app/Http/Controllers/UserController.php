<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function switch($lang)
    {
        Session::put('language', $lang);

        app()->setlocale($lang);

        return redirect()->back();
    }
}