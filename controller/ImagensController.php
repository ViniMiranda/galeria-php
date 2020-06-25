<?php
    require_once('./model/Imagem.php');

    class ImagensController{
        public function listAll(){
            $obj = new Imagem();
            $obj->setUserId($_SESSION['user']->id);
            $imagens = $obj->listAll();
            
            include('./view/imagens.php');
        }
    }
