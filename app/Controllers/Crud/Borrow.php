<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BorrowModel;

class Borrow extends BaseController
{
    protected $BorrowModel;
    public function __construct(){
        $this->BorrowModel = new BorrowModel();
    }

    public function borrow()
    {
        $Borrow = $this->BorrowModel->findAll();

        $data = [
            'title' => 'Borrows | PERPUS',
            'navText' => 'Borrows Data',
            'Borrow' => $Borrow
        ];

        return view('pages/borrow', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Borrow Data Form',
            'navText' => '+ Borrow Data'
        ];

        return view('pages/create/borrowCreate', $data);
    }

    public function save()
    {

        // validasi input
        // if(!$this->validate([
        //     'title' => 'required|is_unique[book.title]'
        // ])) {
        //     return redirect()->to(base_url().'book/create')->withInput();
        // }

        $this->BorrowModel->save([
            'id_borrower' => $this->request->getVar('id_borrower'),
            'id_book' => $this->request->getVar('id_book'),
            'id_staff' => $this->request->getVar('id_staff'),
            'release_date' => $this->request->getVar('release_date'),
            'due_date' => $this->request->getVar('due_date'),
            'note' => $this->request->getVar('note')
        ]);

        session()->setFlashdata('message', 'Data Have Been Added to Database.');

        return redirect()->to('/borrow');
    }
}
