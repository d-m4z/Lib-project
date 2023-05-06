<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function about()
    {
        return view('pages/about');
    }
}
