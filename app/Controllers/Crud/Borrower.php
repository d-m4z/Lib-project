<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BorrowerModel;

class Borrower extends BaseController
{
    protected $BorrowerModel;
    public function __construct(){
        $this->BorrowerModel = new BorrowerModel();
    }

    public function borrower()
    {
        $Borrower = $this->BorrowerModel->findAll();

        $data = [
            'Borrower' => $Borrower
        ];

        return view('pages/borrower', $data);
    }
}
