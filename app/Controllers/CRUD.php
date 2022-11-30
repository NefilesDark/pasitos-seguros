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
            'select' => $data->select()
        ];
        
        if($tipo == '1')
        {
            //var_dump($consulta);
            echo view("consultas",$consulta);
        }
            
        else
        {
            
            echo "<h1>HOLA</h1>";
        }

    }

    public function delete(){
        $accion = new UserModel();
        $id = $this->request->getPost('id');
        if($accion->update($id,['Status' => 0]))
        {
            echo "<script>alert('Salon eliminado con exito.');</script>";
            echo view("header");
            echo view("inicio");
        }else
            echo "<script>alert('Mamó.');</script>";
        
    }

    public function up(){
        if($this->validate([
            'salon' => 'required|numeric'
        ]))
        {   
            $model = new UserModel();
            $salon = $this->request->getPost('salon');
            //$verify = $model->verify($salon);
            // if($verify = TRUE)
            // {
            //     echo view("header");
            //     echo view("Admin/Salones");
            //     echo "<script>alert('Checale bien pa' no se pudo.');</script>";
            // }else{
                if(!$model->save([
                    'Salon' => $this->request->getPost('salon'),
                    'Status' => $this->request->getPost('status')
                ]))
                {
                    
                    echo view("header");
                    echo view("alert");
                    echo view("Admin/Salones");
                    
                }else{
                    echo "<script>alert('Salon registrado con exito.');</script>";
                    echo view("header");
                    echo view("inicio");
                }
                
        
            
        }else{
            $validation = \Config\Services::validation();
            $error = $validation->listErrors();
            echo view("header");
            //echo view("error",['validation'=>$validation]);
            echo view("Admin/Alta_salon",['validation'=>$validation]);

        }
        
    }

    public function actualizar($op = null){
        
        echo view("header");
        $op= $this->request->getPost('op');
        $data = new UserModel();
        if($op == null){
            $id = $this->request->getPost('id');
            $consulta = [
                'select' => $data->select($id)
            ];
            echo view("Admin/AS",$consulta);
        }else{
            $id = $this->request->getPost('id');
            if($this->validate([
                'salon' => 'required|numeric'
            ]))
            {
                if($data->update($id,[
                    'Salon' => $this->request->getPost('salon'),
                    'Status' => $this->request->getPost('status')
                ]))
                {
                    echo "<script>alert('Salon actualizado con exito.');</script>";
                    echo view("inicio");
                }else{
                    echo "<script>alert('Que pedo, si esto si funcionaba.');</script>";
                }
                
            }else{
                echo "<script>alert('Datos erroneos, intentelo nuevamente.');</script>";
                echo view("Admin/Salones");
    
            }
            
            

        }

    }


}
?>