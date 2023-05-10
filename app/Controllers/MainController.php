<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PERPUS'
        ];
        return view('pages/home', $data);
    }

    public function login()
    {
        return view('login/login');
    }
}
