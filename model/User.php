<?php
class User{
    private $userId;
    private $nome;
    private $userName;
    private $email;
    private $senha;
    private $con;

    public function __construct($userId = null)
    {   
        $this->userId = $userId;
        // constantes de inc/Config.php
        $this->con = new PDO(SERVIDOR, USER, SENHA);
    }
    public function create(){
        try{
            $sql = $this->con->prepare("INSERT INTO `users` (`id`, `nome`, `nomeUsuario`, `email`, `senha`, `createdAt`) VALUES (?, ?, ?, ?, ?)");
            $sql->execute([$this->userId, $this->nome, $this->userName, $this->email, $this->senha]);
        }catch(Exception $ex){
            
        }

            
    }
    public function verificar(){
        try{
            $sql = $this->con->prepare("SELECT * FROM Users WHERE email = ? and SENHA = ?");
            $sql->execute([$this->email, $this->senha]);
            $row = $sql->fetch();
    
            if(password_verify($this->senha, $row->senha)){
                return true;
            }else{
                return false;
            }
        }catch(Exception $ex){
            return "Operação não pôde ser concluída";
        }

    }
    // procura se usuario com o email passado existe e retorna verdadeiro ou falso
    public function findOne($field, $fieldName){
        try{
            $sql = $this->con->prepare("SELECT email FROM Users WHERE ? = ?");
            $sql->execute([$fieldName, $field]);    
            $row = $sql->fetch();
    
            if($row > 1){
                return true;
            }else{
                return false;
            }
        }catch(Exception $ex){
            return "Operação não pôde ser concluída";
        }
    }
    public function findOneUsername($username){
        try{
            $sql = $this->con->prepare("SELECT nomeUsuario FROM Users WHERE  nomeUsuario = ?");
            $sql->execute([$username]);    
            $row = $sql->fetch();
    
            if($row > 1){
                return true;
            }else{
                return false;
            }
        }catch(Exception $ex){
            return "Operação não pôde ser concluída";
        }
    }

    public function getUserId()
    {
        return $this->useriId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function getNome()
    {
        return $this->useriId;
    }
    public function setNome($nome)
    {
        $this->userId = $nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

}