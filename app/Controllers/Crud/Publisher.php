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
}
