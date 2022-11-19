<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController{


    public function login(){
        echo view("header");
        echo view("index");
    }

    
    public function inicio(){
        echo view("header");
        echo view("/Admin/inicio");

    }

    public function logout(){

    }

    public function consulta(){
        
    
    }

    public function reportes(){
        echo view("header");
        echo view("/Admin/reportes.php");
    }
    
    public function Alumnos(){
        echo view("header");
        echo view("/Admin/Alumnos");
    }

    public function Avisos(){
        echo view("header");
        echo view("/Admin/Avisos.php");
    }

    public function Grupos(){
        echo view("header");
        echo view("/Admin/Grupos");
    }

    public function Profesores(){
        echo view("header");
        echo view("/Admin/Profesores");
    }

    public function Salones(){
        echo view("header");
        echo view("/Admin/Salones");
    }
}

?>