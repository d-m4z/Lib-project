<?php

namespace App\Controllers;

use App\Models\StaffModel;
use App\Models\BorrowModel;
use App\Models\BookModel;
use App\Models\BorrowerModel;

class MainController extends BaseController
{
    protected $StaffModel;
    protected $BorrowModel;
    protected $BookModel;
    protected $BorrowerModel;
    protected $CategoryModel;
    protected $PublisherModel;

    public function __construct()
    {
        $this->StaffModel = new StaffModel();
        $this->BorrowModel = new BorrowModel();
        $this->BookModel = new BookModel();
        $this->BorrowerModel = new BorrowerModel();
        $this->CategoryModel = new BorrowerModel();
        $this->PublisherModel = new BorrowerModel();
    }

    public function index()
    {
        
        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Home | LibProject.',
            'qstaff' => $this->StaffModel->countAllResults(),
            'qborrower' => $this->BorrowerModel->countAllResults(),
            'qborrow' => $this->BorrowModel->countAllResults(),
            'qbook' => $this->BookModel->countAllResults(),
            'qcategory' => $this->CategoryModel->countAllResults(),
            'qpublisher' => $this->PublisherModel->countAllResults()
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
        $check = $this->StaffModel->where(['email' => $auth['email']])->first();
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
