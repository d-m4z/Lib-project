<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PERPUS',
            'navText' => ''
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | PERPUS',
            'navText' => ''
        ];
        return view('pages/about', $data);
    }

    public function login()
    {
        return view('login/login');
    }
}
