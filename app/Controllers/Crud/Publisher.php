<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\PublisherModel;

class Publisher extends BaseController
{
    protected $PublisherModel;
    public function __construct(){
        $this->PublisherModel= new PublisherModel();
    }
    
    public function publisher()
    {
        $Publisher= $this->PublisherModel->findAll();

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Publishers | PERPUS',
            'navText' => 'Publishers Data',
            'Publisher' => $Publisher
        ];

        return view('pages/publisher', $data);
    }

    public function create()
    {

        if (!session('email')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Add Publisher Data Form',
            'navText' => '+ Publisher Data'
        ];

        return view('pages/create/publisherCreate', $data);
    }

    public function save()
    {

        // validasi input
        // if(!$this->validate([
        //     'title' => 'required|is_unique[book.title]'
        // ])) {
        //     return redirect()->to(base_url().'book/create')->withInput();
        // }

        $this->PublisherModel->save([
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'contact' => $this->request->getVar('contact')
        ]);

        session()->setFlashdata('message', 'Data Have Added to Database.');

        return redirect()->to(base_url().'publisher');
    }

    public function delete($id)
    {
        $this->PublisherModel->delete($id);
        session()->setFlashdata('message1', 'Data Have Deleted from Database.');
        return redirect()->to(base_url().'publisher');
    }

    public function edit($id)
    {
        $publisher = $this->PublisherModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Form Edit Publisher',
            'publisher' => $publisher
        ];
        return view('/pages/edit/publisherEdit', $data);
    }

    public function editPro()
    {
        $post = $this->request->getPost();

        // validasi
        if (!$this->validate([
            'name' => 'required|is_unique[publisher.name]'
        ])) {
            return redirect()->to(base_url() . 'publisher/edit/' . $post['id'])->withInput();
        }

        $this->PublisherModel->save([
            'id' => $post['id'],
            'name' => $post['name'],
            'address' => $post['address'],
            'contact' => $post['contact']
        ]);

        session()->setFlashdata('msg-edit', 'Data Have Updated from Database.');
        return redirect()->to(base_url() . 'publisher');
    }
}
