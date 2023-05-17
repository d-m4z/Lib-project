<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BorrowMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_borrower' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'id_book' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'id_staff' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'release_date' => [
                'type' => 'DATE'
            ],
            'due_date' => [
                'type' => 'DATE'
            ],
            'note' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type' => 'date'
            ],
            'updated_at' => [
                'type' => 'date'
            ],
            'deleted_at' => [
                'type' => 'date'
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_borrower', 'borrower', 'id','','','fk_id_borrower');
        $this->forge->addForeignKey('id_book', 'book', 'id','','','fk_id_book');
        $this->forge->addForeignKey('id_staff', 'staff', 'id','','','fk_id_staff');
        $this->forge->createTable('borrow');
    }

    public function down()
    {
        $this->forge->dropTable('borrow');
    }
}
