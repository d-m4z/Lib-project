<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BorrowModel;

class Borrow extends BaseController
{
    protected $BorrowModel;
    protected $helpers = ['form'];
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
        if(!$this->validate([
            'id_borrower' => 'required|is_unique[borrow.id_borrower]'
        ])) {
            return redirect()->to(base_url().'borrow/create')->withInput();
        }

        $this->BorrowModel->save([
            'id_borrower' => $this->request->getVar('id_borrower'),
            'id_book' => $this->request->getVar('id_book'),
            'id_staff' => $this->request->getVar('id_staff'),
            'release_date' => $this->request->getVar('release_date'),
            'due_date' => $this->request->getVar('due_date'),
            'note' => $this->request->getVar('note')
        ]);

        session()->setFlashdata('message', 'Data Have Added to Database.');

        return redirect()->to('/borrow');
    }

    public function delete($id)
    {
        $this->BorrowModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to('/borrow');
    }
}
