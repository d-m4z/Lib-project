<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BookModel;

class Book extends BaseController
{
    protected $BookModel;
    protected $helpers = ['form'];
    public function __construct(){
        $this->BookModel = new BookModel();
    }

    public function book()
    {
        $Book = $this->BookModel->findAll();

        $data = [
            'title' => 'Books | PERPUS',
            'navText' => 'Books Data',
            'Book' => $Book
        ];

        return view('pages/book', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Books Data Form',
            'navText' => '+ Books Data'
        ];

        return view('pages/create/bookCreate', $data);
    }

    public function save()
    {

        // validasi input
        if(!$this->validate([
            'title' => 'required|is_unique[book.title]'
        ])) {
            return redirect()->to(base_url().'book/create')->withInput();
        }

        $this->BookModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'publication_year' => $this->request->getVar('publication_year'),
            'id_publisher' => $this->request->getVar('id_publisher'),
            'id_category' => $this->request->getVar('id_category'),
            'quantity' => $this->request->getVar('quantity')
        ]);

        session()->setFlashdata('message', 'Data Have Added to Database.');

        return redirect()->to('/book');
    }

    public function delete($id)
    {
        $this->BookModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to('/book');
    }
}
