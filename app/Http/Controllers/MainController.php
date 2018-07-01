<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('beauty.index');
    }


    public function contact ()
    {
        return view('beauty.contact');
    }
}
