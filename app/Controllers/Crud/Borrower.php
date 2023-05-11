<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BorrowerModel;

class Borrower extends BaseController
{
    protected $BorrowerModel;
    public function __construct(){
        $this->BorrowerModel = new BorrowerModel();
    }

    public function borrower()
    {
        $Borrower = $this->BorrowerModel->findAll();

        $data = [
            'title' => 'Borrowers | PERPUS',
            'navText' => 'Borrowers Data',
            'Borrower' => $Borrower
        ];

        return view('pages/borrower', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Borrower Data Form',
            'navText' => '+ Borrower Data'
        ];

        return view('pages/create/borrowerCreate', $data);
    }

    public function save()
    {

        // validasi input
        // if(!$this->validate([
        //     'title' => 'required|is_unique[book.title]'
        // ])) {
        //     return redirect()->to(base_url().'book/create')->withInput();
        // }

        $this->BorrowerModel->save([
            'name' => $this->request->getVar('name'),
            'birthdate' => $this->request->getVar('birthdate'),
            'address' => $this->request->getVar('address'),
            'gender' => $this->request->getVar('gender'),
            'contact' => $this->request->getVar('contact'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('message', 'Data Have Added to Database.');

        return redirect()->to('/borrower');
    }

    public function delete($id)
    {
        $this->BorrowerModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to('/borrower');
    }
}
