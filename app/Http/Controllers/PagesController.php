<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        if (!Auth::check())
            return redirect()->route("login")->with("error", "User not logged in");
        return view('index');
    }
}
