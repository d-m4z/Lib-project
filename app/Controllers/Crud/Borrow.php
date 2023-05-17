<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BorrowModel;
use App\Models\BorrowerModel;
use App\Models\BookModel;
use App\Models\StaffModel;

class Borrow extends BaseController
{
    protected $BorrowModel;
    protected $BorrowerModel;
    protected $BookModel;
    protected $StaffModel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->BorrowModel = new BorrowModel();
        $this->BorrowerModel = new BorrowerModel();
        $this->BookModel = new BookModel();
        $this->StaffModel = new StaffModel();
    }

    public function borrow()
    {
        $Borrow = $this->BorrowModel
            ->select('borrow.id as id,borrower.name as client,book.title,staff.name,borrow.release_date,borrow.due_date,borrow.note')
            ->join('borrower', 'borrow.id_borrower=borrower.id', 'left')
            ->join('book', 'borrow.id_book=book.id', 'left')
            ->join('staff', 'borrow.id_staff=staff.id', 'left')
            ->findAll();

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Borrows | LibProject.',
            'Borrow' => $Borrow
        ];

        return view('pages/borrow', $data);
    }

    public function create()
    {

        $borrower = $this->BorrowerModel->findAll();
        $book = $this->BookModel->findAll();
        $staff = $this->StaffModel->findAll();


        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Add Borrow Data Form',
            'navText' => '+ Borrow Data',
            'borrower' => $borrower,
            'book' => $book,
            'staff' => $staff
        ];

        return view('pages/create/borrowCreate', $data);
    }

    public function save()
    {

        // validasi input
        if (!$this->validate([
            'id_borrower' => 'required|is_unique[borrow.id_borrower]'
        ])) {
            return redirect()->to(base_url() . 'borrow/create')->withInput();
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

        return redirect()->to(base_url() . 'borrow');
    }

    public function delete($id)
    {
        $this->BorrowModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to(base_url() . 'borrow');
    }

    public function edit($id)
    {
        $borrow = $this->BorrowModel->where(['id' => $id])->first();
        $borrower = $this->BorrowerModel->findAll();
        $book = $this->BookModel->findall();
        $staff = $this->StaffModel->findAll();

        $data = [
            'title' => 'Form Edit borrow',
            'borrow' => $borrow,
            'borrower' => $borrower,
            'book' => $book,
            'staff' => $staff

        ];
        return view('/pages/edit/borrowEdit', $data);
    }

    public function editPro()
    {
        $post = $this->request->getPost();

        // validasi
        if (!$this->validate([
            'id_borrower' => 'required',
            'id_book' => 'required',
            'id_staff' => 'required',
            'due_date' => 'required'
        ])) {
            return redirect()->to(base_url() . 'borrow/edit/' . $post['id'])->withInput();
        }

        $this->BorrowModel->save([
            'id' => $post['id'],
            'id_borrower' => $post['id_borrower'],
            'id_book' => $post['id_book'],
            'id_staff' => $post['id_staff'],
            'release_date' => $post['release_date'],
            'due_date' => $post['due_date'],
            'note' => $post['note']
        ]);

        session()->setFlashdata('msg-edit', 'Data Have Updated from Database.');
        return redirect()->to(base_url() . 'borrow');
    }
}
