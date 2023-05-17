<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PublisherMigration extends Migration
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
            'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 50,
                    'null' => false
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'contact' => [
                'type' => 'VARCHAR',
                'constraint' => 15
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
        $this->forge->createTable('publisher');
    }

    public function down()
    {
        $this->forge->dropTable('publisher');
    }
}
