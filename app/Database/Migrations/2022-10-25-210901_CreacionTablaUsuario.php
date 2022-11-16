<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreacionTablaUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],

            'nombre'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],

            'AP'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],

            'AM'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '30'
            ],

            'mail'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'null'              => FALSE
            ],

            'password'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '30',
                'null'              => FALSE
            ],
        ]);

        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
