<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BookModel;

class Book extends BaseController
{
    protected $BookModel;
    public function __construct(){
        $this->BookModel = new BookModel();
    }

    public function book()
    {
        $Book = $this->BookModel->findAll();

        $data = [
            'Book' => $Book
        ];

        return view('pages/book', $data);
    }
}
