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
}
