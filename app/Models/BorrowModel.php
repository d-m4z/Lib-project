<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'borrow';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'release_date', 'due_date', 'note'
    ];

    // Dates
    protected $useTimestamps = false;

    public function getIdBorrower()
    {
        return $this->db->table('borrower')->join('borrow', 'id_borrower = id')->get()->getResult('array');
    }

    public function getIdBook()
    {
        return $this->db->table('book')->join('borrow', 'id_book = id')->get()->getResult('array');
    }

    public function getIdStaff()
    {
        return $this->db->table('staff')->join('borrow', 'id_staff = id')->get()->getResult('array');
    }
}
