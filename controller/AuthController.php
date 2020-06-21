<?php
include('../model/User.php');

class AuthController
{

    public function cadastrarUser()
    {
        $user = new User();
        
        if ($user->findOne($_POST['email'], "email")) {
            echo "Email já em uso";
        } else if ($user->findOne($_POST['username'], "nomeUsuario")) {
            echo "Nome de usuário já em uso";
        } else if(isset($_POST['nome'])&& isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['senha'])){
            
            $user->setNome($_POST['nome']);
            $user->setUserName($_POST['userName']);
            $user->setEmail($_POST['email']);
            $user->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));
    
            $user->create();
        }

    }
    public function verificarUser()
    {
        $user = new User();
        $user->setEmail($_POST['email']);
        $user->setSenha($_POST['senha']);

        $user->verificar();
    }
    public function alterarUser()
    {
    }
}
