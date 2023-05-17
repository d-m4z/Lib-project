<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'borrower';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name', 'birthdate', 'address', 'gender', 'contact', 'email'];

    // Dates
    protected $useTimestamps = true;
}
