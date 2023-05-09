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
            'title' => 'Staffs | PERPUS',
            'navText' => 'Staffs Data',
            'Staff' => $Staff
        ];

        return view('pages/staff', $data);
    }
}
