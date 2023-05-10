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

        $data = [
            'title' => 'Publishers | PERPUS',
            'navText' => 'Publishers Data',
            'Publisher' => $Publisher
        ];

        return view('pages/publisher', $data);
    }

    public function create()
    {
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

        session()->setFlashdata('message', 'Data Have Been Added to Database.');

        return redirect()->to('/publisher');
    }
}
