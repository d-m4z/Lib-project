<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\BorrowModel;

class Borrow extends BaseController
{
    protected $BorrowModel;
    public function __construct(){
        $this->BorrowModel = new BorrowModel();
    }

    public function borrow()
    {
        $Borrow = $this->BorrowModel->findAll();

        $data = [
            'Borrow' => $Borrow
        ];

        return view('pages/borrow', $data);
    }
}
