<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'salon';
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

}
?>