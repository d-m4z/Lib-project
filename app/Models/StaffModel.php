<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'staff';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name', 'email', 'password'
    ];

    // Dates
    protected $useTimestamps = false;
}
