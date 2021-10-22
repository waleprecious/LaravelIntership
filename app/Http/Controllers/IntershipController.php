<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntershipController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function contactUs()
    {
        return view('contactUs');
    }
}
