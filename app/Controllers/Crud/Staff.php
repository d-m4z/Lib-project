<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\StaffModel;

class Staff extends BaseController
{
    protected $StaffModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->StaffModel = new StaffModel();
    }

    public function staff()
    {
        $Staff = $this->StaffModel->findAll();

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Staffs | LibProject.',
            'navText' => 'Staffs Data',
            'Staff' => $Staff
        ];

        return view('pages/staff', $data);
    }

    public function create()
    {

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Add staff Data Form',
        ];

        return view('pages/create/staffCreate', $data);
    }

    public function save()
    {

        // validasi input
        // if(!$this->validate([
        //     'title' => 'required|is_unique[book.title]'
        // ])) {
        //     return redirect()->to(base_url().'book/create')->withInput();
        // }

        $this->StaffModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => md5($this->request->getVar('password'))
        ]);

        session()->setFlashdata('message', 'Data Have Added to Database.');

        return redirect()->to(base_url() . 'staff');
    }

    public function delete($id)
    {
        $this->StaffModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to(base_url() . 'staff');
    }

    public function edit($id)
    {
        $staff = $this->StaffModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Form Edit Staff',
            'staff' => $staff
        ];
        return view('/pages/edit/staffEdit', $data);
    }

    public function editPro()
    {
        $post = $this->request->getPost();

        // validasi
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ])) {
            return redirect()->to(base_url() . 'staff/edit/' . $post['id'])->withInput();
        }

        $this->StaffModel->save([
            'id' => $post['id'],
            'name' => $post['name'],
            'email' => $post['email'],
            'password' => $post['password']
        ]);

        session()->setFlashdata('msg-edit', 'Data Have Updated from Database.');
        return redirect()->to(base_url() . 'staff');
    }
}
