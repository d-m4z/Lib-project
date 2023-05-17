<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BookModel;
use App\Models\CategoryModel;
use App\Models\PublisherModel;

class Book extends BaseController
{
    protected $BookModel;
    protected $CategoryModel;
    protected $PublisherModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->BookModel = new BookModel();
        $this->CategoryModel = new CategoryModel();
        $this->PublisherModel = new PublisherModel();
    }

    public function book()
    {
        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $Book = $this->BookModel
            ->select('book.id as id,book.title,book.author,book.publication_year,publisher.name,category.category,book.quantity')
            ->join('publisher', 'book.id_publisher=publisher.id', 'left')
            ->join('category', 'book.id_category=category.id', 'left')
            ->findAll();

        $data = [
            'title' => 'Books | LibProject.',
            'Book' => $Book
        ];

        return view('pages/book', $data);
    }

    public function create()
    {
        $category = $this->CategoryModel->findAll();
        $publisher = $this->PublisherModel->findAll();

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Add Books Data Form',
            'navText' => '+ Books Data',
            'category' => $category,
            'publisher' => $publisher
        ];

        return view('pages/create/bookCreate', $data);
    }

    public function save()
    {

        // validasi input
        if (!$this->validate([
            'title' => 'required|is_unique[book.title]',
            'author' => 'required',
            'publication_year' => 'required'
        ])) {
            return redirect()->to(base_url() . 'book/create')->withInput();
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

        return redirect()->to(base_url() . 'book');
    }

    public function delete($id)
    {
        $this->BookModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to(base_url() . 'book');
    }

    public function edit($id)
    {
        $category = $this->CategoryModel->findAll();
        $publisher = $this->PublisherModel->findAll();
        $Book = $this->BookModel->where(['id' => $id])->first();

        $data = [
            'title' => 'Form Edit book',
            'Book' => $Book,
            'category' => $category,
            'publisher' => $publisher
        ];

        return view('/pages/edit/bookEdit', $data);
    }

    public function editPro()
    {
        // $book = $this->BookModel->findAll();
        $post = $this->request->getPost();

        // validasi
        if (!$this->validate([
            'title' => 'required|is_unique[book.title]',
            'author' => 'required',
            'publication_year' => 'required'
        ])){
            return redirect()->to(base_url() . 'book/edit/' . $post['id'])->withInput();
        }

        $this->BookModel->save([
            'id' => $post['id'],
            'title' => $post['title'],
            'author' => $post['author'],
            'publication_year' => $post['publication_year'],
            'id_publisher' => $post['id_publisher'],
            'id_category' => $post['id_category'],
            'quantity' => $post['quantity']
        ]);

        session()->setFlashdata('msg-edit', 'Data Have Updated from Database.');
        return redirect()->to(base_url() . 'book');
    }
}
