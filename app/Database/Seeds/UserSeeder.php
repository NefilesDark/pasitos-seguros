<?php
// Este pedo sirve para hacer inserts en la base de datos
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => '1',
            'nombre' => 'Lodi',
            'AP' => 'Godi',
            'AM' => 'Trodi',
            'mail'    => 'darth@theempire.com',
            'password'    => '123123qwe'
        ];

        // Using Query Builder
       $this->db->table('usuarios')->insert($data);
       //$this->db->query('INSERT INTO usuarios (nombre,AP,AM, email, password) VALUES(:nombre:,:AP:,:AM:, :email:,:password:,)', $data);
    }
}