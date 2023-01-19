<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'alumno';
    protected $primaryKey = 'idALUMNO';
    protected $allowedFields = ['Boleta','Nombre', 'ApellidoP','ApellidoM','Fecha_Nacimiento','Padre','Status'];
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
        ->where(['idALUMNO' => $id])
        ->first();
    }

    public function selectAll(){
        return $this->asObject()->findAll();
    }


}
?>