<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class BorrowerMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true,
                'unsigned' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'birthdate' => [
                'type' => 'DATE',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => false
            ],
            'contact' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('borrower');
    }

    public function down()
    {
        $this->forge->dropTable('borrower');
    }
}
