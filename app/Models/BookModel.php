<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'book';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title', 'author', 'publication_year', 'quantity'
    ];

    public function getCategory()
    {

        // SELECT * FROM book JOIN category ON id_category = id;

        return $this->db->table('book')->join('category', 'id_category = id')->get()->getResultArray();
    }

    public function getPublisher()
    {

        // SELECT * FROM book JOIN category ON id_category = id;

        return $this->db->table('book')->join('publisher', 'id_publisher = id')->get()->getResultArray();
    }

    // Dates
    protected $useTimestamps = false;
}
