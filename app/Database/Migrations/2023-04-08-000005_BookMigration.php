<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PharIo\Manifest\Author;

class BookMigration extends Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'publication_year' => [
                'type' => 'VARCHAR',
                'constraint' => 4
            ],
            'id_publisher' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'id_category' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 3
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_publisher', 'publisher', 'id','','', 'fk_id_publisher');
        $this->forge->addForeignKey('id_category', 'category', 'id','','', 'fk_id_category');
        $this->forge->createTable('book');
    }

    public function down()
    {
        $this->forge->dropTable('book');
    }
}
