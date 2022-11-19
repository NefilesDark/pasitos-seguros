<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController{
    //Variable para probar si es Admin o padre "op"
    

    public function login(){
        echo view("header");
        echo view("index");
    }

    
    public function inicio(){
        $op = 1;
        echo view("header");
        if ($op == 1)
            echo view("/Admin/inicio");
        else
            echo view("/Users/inicio");

    }

    public function logout(){

    }

    public function consulta(){
        echo view("header");
        echo view("/consultas");
    
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
}

?>