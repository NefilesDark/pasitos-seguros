<?php namespace App\Controllers;

use App\Models\UserModel;
//use CodeIgniter\HTTP\IncomingRequest;

class User extends BaseController{
    //Variable para probar si es Admin o padre "op"
    

    public function login(){
        echo view("index");
    }

    
    public function inicio(){
        $op = 1;
        echo view("header");
        if ($op == 1)
        {
            session('message');
            echo view("inicio");
        }
            
        else
            echo view("inicio");

    }

    public function logout(){

    }

    public function reportes(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/reportes/reportes");
        else
            echo view("/Users/reportes.php");
    }

    public function Alumnos(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Alumnos/Alumnos");
        else
            echo view("/Users/Alumnos/Alumnos");
    }

    public function Avisos(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Avisos/Avisos");
        else
            echo view("/Users/Avisos.php");
    }

    public function Grupos(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Grupos/Grupos");
        else
            echo view("/Users/Grupos/Grupos");
    }

    public function Profesores(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Profesores/Profesores");
        else
            echo view("/Users/Profesores/Profesores");
    }

    public function Salones(){
        $op = 1;

        echo view("header");
        if ($op == 1)
            echo view("/Admin/salones/Salones");
        else
            echo view("/Users/salones/Salones");
    }

    public function try(){
        $consulta = new UserModel();
        var_dump($consulta->asObject()->findAll());
    }

    //MUESTRA EL CRUD DE SALONES
    public function showCRUD(){
        echo view("header");
        $CRUD = $this->request->getPost('variable');
        $data = new UserModel();
        switch($CRUD)
        {
            case "1":
                echo view("consultas");
            break;

            case "2":
                $consulta = [
                    'select' => $data->selectAll()
                ];
                echo view("Admin/salones/Actualizar_Salon",$consulta);
            break;

            case "3":
                $consulta = [
                    'select' => $data->select()
                ];
                echo view("/Admin/salones/Baja_salon",$consulta);
            break;

            case "4":
                $validation = \Config\Services::validation();
                echo view("Admin/salones/Alta_salon",['validation'=>$validation]);
            break;
        }
    }
    //ACCIONES CRUD DE ALUMNOS
    public function showCRUDa(){
        echo view("header");
        $CRUD = $this->request->getPost('variable');
        $data = new UserModel();
        switch($CRUD)
        {
            case "1":
                echo view("Admin/Alumnos/consulta");
            break;

            case "2":
                $consulta = [
                    'select' => $data->selectAll()
                ];
                echo view("Admin/salones/Actualizar_Alumno",$consulta);
            break;

            case "3":
                $consulta = [
                    'select' => $data->select()
                ];
                echo view("/Admin/salones/Baja_Alumno",$consulta);
            break;

            case "4":
                //$validation = \Config\Services::validation();
                echo view("Admin/salones/Alta_Alumno");
            break;
        }
    }
}

?>