<?php

namespace App\Controllers\Crud;

use App\Controllers\BaseController;
use App\Models\StaffModel;

class Staff extends BaseController
{
    protected $StaffModel;
    public function __construct(){
        $this->StaffModel= new StaffModel();
    }
    
    public function staff()
    {
        $Staff= $this->StaffModel->findAll();

        $data = [
            'Category' => $Staff
        ];

        return view('pages/staff', $data);
    }
}
