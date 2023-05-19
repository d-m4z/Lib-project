<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    protected $CategoryModel;
    protected $helpers = ['form'];
    
    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }

    public function category()
    {
        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $Category = $this->CategoryModel->findAll();

        $data = [
            'title' => 'Categories | LibProject.',
            'navText' => 'Categories Data',
            'Category' => $Category
        ];

        return view('pages/category', $data);
    }

    public function create()
    {

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Add Category Data Form',
            'navText' => '+ Category Data'
        ];

        return view('pages/create/categoryCreate', $data);
    }

    public function save()
    {

        // validasi
        if (!$this->validate([
            'category' => 'required'
        ])) {
            return redirect()->to(base_url() . 'category/edit/')->withInput();
        }

        $this->CategoryModel->save([
            'category' => $this->request->getVar('category'),
        ]);

        session()->setFlashdata('message', 'Data Have Added to Database.');

        return redirect()->to(base_url() . 'category');
    }

    public function delete($id)
    {
        $this->CategoryModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to(base_url() . 'category');
    }

    public function edit($id)
    {
        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $Category = $this->CategoryModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Form Edit Category',
            'Category' => $Category
        ];
        return view('/pages/edit/categoryEdit', $data);
    }

    public function editPro()
    {
        $post = $this->request->getPost();

        // validasi
        if (!$this->validate([
            'category' => 'required'
        ])) {
            return redirect()->to(base_url() . 'category/edit/' . $post['id'])->withInput();
        }

        $this->CategoryModel->save([
            'id' => $post['id'],
            'category' => $post['category']
        ]);

        session()->setFlashdata('msg-edit', 'Data Have Updated from Database.');
        return redirect()->to(base_url() . 'category');
    }
}
