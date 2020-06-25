<?php
require_once('./model/Imagem.php');
class UploadController
{

    public function upload()
    {
        $obj = new Imagem();

        if(isset($_POST['submit'])){
            $name = $_FILES['image']['name'];  
            $temp_name  = $_FILES['image']['tmp_name'];  
            
            if(isset($name) and !empty($name)){
                $location = './uploads/';      
                if(move_uploaded_file($temp_name, $location.$name)){
                    $obj->setCaminho($location.$name);
                    $obj->setUserId($_SESSION['user']->id);
                    $obj->create();

                    header('location: ./');
                }
            } else {
                $_SESSION['msg'] = 'Escolha um arquivo';
            }
        }
    }
}
