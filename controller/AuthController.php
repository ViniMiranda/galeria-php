<?php
require_once('./model/User.php');

class AuthController
{
    // Relacionado ao cadastro de usuarios  
    public function signin()
    {
        // checando se informacoes post existem
        if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['senha'])) {
            $user = new User();
            // checando se email ja esta em uso 
            if ($user->findOne("email", $_POST['email'])) {
                $_SESSION['msg'] = "esse email já está em uso";
                header('location: ./view/signin.php');
                //checando se nome de usuario ja esta em uso 
            } else if ($user->findOne("username", $_POST['username'])) {
                $_SESSION['msg'] = "este nome de usuário já está em uso";
                header('location: ./view/signin.php');
            } else {
                try {
                    $user->setNome($_POST['nome']);
                    $user->setSobrenome($_POST['sobrenome']);
                    $user->setUsername($_POST['username']);
                    $user->setEmail($_POST['email']);
                    $user->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));

                    $user->create();

                    echo ("<script>alert('Cadastrado com sucesso')</script>");

                    header('location: ./');
                } catch (PDOException $e) {
                    $_SESSION['msg'] = "erro ao registrar novo usuário".$e;
                }
            }
        } else {
            include("./view/signin.php");
        }
    }
    // Relacionado ao login do usuario
    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['senha'])) {
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setSenha($_POST['senha']);
            $user->login();

            header('location: ./');
        } else {
            include("./view/login.php");
        }
    }
    // encerrar sessao
    public function logout()
    {
        // if para nao dar erro de header already sent
        if ($_SESSION['user']) {
            header('location: ./');
            session_destroy();
            session_start();
        }
    }
    // checar se usuario esta logado
    public function loginStatus()
    {
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
    //view galeria 
    public function view()
    {
        // redirecionar para a galeria se usuario esta logado
        if ($this->loginStatus()) {
            include('./view/galeria.php');
        }else{
            include('./view/login.php');
        }
    }
}
