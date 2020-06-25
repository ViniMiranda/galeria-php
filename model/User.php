<?php
class User
{
    private $userId;
    private $nome;
    private $sobrenome;
    private $username;
    private $email;
    private $senha;
    private $con;

    public function __construct($userId = null)
    {
        $this->userId = $userId;
        // constantes de inc/Config.php
        $this->con = new PDO(SERVIDOR, USER, SENHA);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function create()
    {
        try {
            $sql = $this->con->prepare("INSERT INTO users(id, nome, sobrenome, username, email, senha, createdAt) VALUES (NULL, ?, ?, ?, ?, ?, NOW())");
            $sql->execute([$this->nome, $this->sobrenome, $this->username, $this->email, $this->senha]);
        } catch (PDOException $e) {
            $_SESSION['msg'] = ("Algo deu errado ao cadastrar usuario.");
        }
    }
    // procura se usuario com o email ou usuario passado existe e retorna verdadeiro ou falso
    public function findOne($campo, $valor)
    {
        try {
            $sql = $this->con->prepare("SELECT email FROM users WHERE $campo = ?");
            $sql->execute([$valor]);
            $row = $sql->fetch();

            if ($row) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            $_SESSION['msg'] = "Operação não pôde ser concluída";
        }
    }

    public function login()
    {
        try {
            $sql = $this->con->prepare("SELECT * FROM users WHERE email = ?");
            $sql->execute([$this->email]);
            $row = $sql->fetchObject();

            // checando se usuario existe
            if ($row) {
                // checando senha do usuario
                if (password_verify($_POST['senha'], $row->senha)) {
                    $_SESSION['user'] = $row;
                    return true;
                } else {
                    $_SESSION['msg'] = "senha incorreta";
                    return false;
                }
            } else {
                $_SESSION['msg'] = "usuario nao encontrado";
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['msg'] =  "Operação não pôde ser concluída";
        }
    }


    //getters and setters 
    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
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

    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
}
