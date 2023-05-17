<?php

namespace App\Controllers;

use App\Models\StaffModel;

class MainController extends BaseController
{
    protected $staffModel;

    public function __construct()
    {
        $this->staffModel = new StaffModel();
    }

    public function index()
    {
        
        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Home | PERPUS'
        ];
        return view('pages/home', $data);
    }

    public function login()
    {
        if (session('email')) {
            return redirect()->to(base_url());
        }
        return view('login/login');
    }

    public function auth()
    {
        $auth = $this->request->getPost();
        $check = $this->staffModel->where(['email' => $auth['email']])->first();
        if ($check) {
            if (md5($auth['password']) == $check['password']) {
                $key = array(
                    'id' => $check['id'],
                    'name' => $check['name'],
                    'email' => $check['email']
                );
                session()->set($key);
                return redirect()->to(base_url());
            } else {
                return redirect()->to(base_url() . 'login')->with('error', 'Password Salah');
            }
        } else {
            return redirect()->to(base_url() . 'login')->with('error', 'Email tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id');
        session()->remove('name');
        session()->remove('email');
        return redirect()->to(base_url('login'));
    }
}
