<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'salon';
    protected $primaryKey = 'idSalon';
    protected $allowedFields = ['Salon', 'Status'];
    protected $validationMessages = [
        'Salon' => [
            'is_unique' => 'Ya existe ese salón, intente de nuevo.',
        ],
    ];

        
    public function select($id = null)
    {
        if($id === null)
        {
            return $this->asObject()
            ->where('Status', 1)->findAll();
        }       

        return $this->asObject()
        ->where(['idSalon' => $id])
        ->first();
    }

    public function selectAll(){
        return $this->asObject()->findAll();
    }

    // public function verify($salon)
    // {
    //     $v = $this->asObject()
    //     ->where('Salon',$salon)->first();
    //     if($v->Salon = $salon)
    //         return TRUE;
    //     else
    //         return FALSE;
    // }
}
?>