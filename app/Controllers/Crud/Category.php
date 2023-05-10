<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    protected $CategoryModel;
    public function __construct(){
        $this->CategoryModel= new CategoryModel();
    }
    
    public function category()
    {
        $Category= $this->CategoryModel->findAll();

        $data = [
            'title' => 'Categories | PERPUS',
            'navText' => 'Categories Data',
            'Category' => $Category
        ];

        return view('pages/category', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Category Data Form',
            'navText' => '+ Category Data'
        ];

        return view('pages/create/categoryCreate', $data);
    }

    public function save()
    {

        // validasi input
        // if(!$this->validate([
        //     'title' => 'required|is_unique[book.title]'
        // ])) {
        //     return redirect()->to(base_url().'book/create')->withInput();
        // }

        $this->CategoryModel->save([
            'category' => $this->request->getVar('category'),
        ]);

        session()->setFlashdata('message', 'Data Have Been Added to Database.');

        return redirect()->to('/category');
    }
}
