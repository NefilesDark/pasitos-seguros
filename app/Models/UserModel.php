<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
        
    public function select($id = null)
    {
        if($id === null)
        {
            return $this->findAll();
        }       

        return $this->asObject()
        ->where(['id' => $id])
        ->first();
    }

    public function insert($data = null, bool $returnID = true)
    {
        $userModel = new \App\Models\UserModel();
        $data = [
            'nombre' => 'Alan',
            'AP' => 'Hernandez',
            'AM' => 'Aguilar',
            'mail' => 'lodirodi@gmail.com',
            'password' => 'lodigodi',
        ];
        $userModel->insert($data);
    }
    
}
?>