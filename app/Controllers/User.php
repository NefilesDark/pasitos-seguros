<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController{


    public function login(){
        
    }

    
    public function login_post(){

    }

    public function logout(){

    }

    public function consulta(){
        $consulta = new UserModel();
        var_dump($consulta->insert());
    
    }
}

?>