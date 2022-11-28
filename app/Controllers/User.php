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
            echo view("inicio");
        else
            echo view("inicio");

    }

    public function logout(){

    }

    public function reportes(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/reportes");
        else
            echo view("/Users/reportes.php");
    }

    public function Alumnos(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Alumnos");
        else
            echo view("/Users/Alumnos");
    }

    public function Avisos(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Avisos");
        else
            echo view("/Users/Avisos.php");
    }

    public function Grupos(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Grupos");
        else
            echo view("/Users/Grupos");
    }

    public function Profesores(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/Profesores");
        else
            echo view("/Users/Profesores");
    }

    public function Salones(){
        $op = 1;

        echo view("header");
        if ($op == 1)
            echo view("/Admin/Salones");
        else
            echo view("/Users/Salones");
    }

    public function try(){
        $consulta = new UserModel();
        var_dump($consulta->asObject()->findAll());
    }

    public function showCRUD(){
        echo view("header");
        $CRUD = $this->request->getPost('variable');

        switch($CRUD)
        {
            case "1":
                echo view("consultas");
            break;

            case "2":
                echo view("Admin/Actualizar_Salon");
            break;

            case "3":
                echo view("Admin/Baja_salon");
            break;

            case "4":
                $validation = \Config\Services::validation();
                echo view("Admin/Alta_salon",['validation'=>$validation]);
            break;
        }
    }

}

?>