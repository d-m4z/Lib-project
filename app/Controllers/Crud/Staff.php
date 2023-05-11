<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\StaffModel;

class Staff extends BaseController
{
    protected $StaffModel;
    public function __construct(){
        $this->StaffModel= new StaffModel();
    }
    
    public function staff()
    {
        $Staff= $this->StaffModel->findAll();

        $data = [
            'title' => 'Staffs | PERPUS',
            'navText' => 'Staffs Data',
            'Staff' => $Staff
        ];

        return view('pages/staff', $data);
    }

    public function create()
    {
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

        return redirect()->to('/staff');
    }

    public function delete($id)
    {
        $this->StaffModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to('/staff');
    }
}
