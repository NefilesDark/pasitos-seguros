<?php namespace App\Controllers;

use App\Models\UserModel;
//use CodeIgniter\HTTP\IncomingRequest;

class CRUD extends BaseController{
    public function consulta(){
        echo view("header");
        //$request = service('request');
        $data = new UserModel();
        $tipo = $this->request->getPost('variable');
        $consulta = [
            'select' => $data->asObject()->findAll()
        ];
        
        if($tipo == '1')
        {
            //echo view("header");
            echo view("consultas",$consulta);
        }
            
        else
        {
            
            echo "<h1>HOLA</h1>";
        }

    }

    public function actualizar(){
        echo view("header");
        echo "<h1> LA BEBELIN </h1>";

    }

    public function delete(){
        echo view("header");
        echo view("/Admin/Baja_salon");
    }

    public function up(){
        if($this->validate([
            'salon' => 'required|numeric'
        ]))
        {
            echo "ola puta";
        }else{
            $validation = \Config\Services::validation();
            echo view("header");
            //echo view("error",['validation'=>$validation]);
            echo view("Admin/Alta_salon",['validation'=>$validation]);

        }
    }


}
?>