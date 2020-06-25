<?php
class Imagem
{
    private $id;
    private $caminho;
    private $descricao;
    private $userId;
    private $categoria;
    private $con;

    public function __construct($id = null)
    {
        $this->id = $id;
        $this->con = new PDO(SERVIDOR, USER, SENHA);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function create()
    {
        try{
            $sql = $this->con->prepare("INSERT INTO imagem(id, caminho, descricao, userId, categoria) VALUES(NULL, ?, 'descricao generica', ?, 1)");
            $sql->execute([$this->caminho, $this->userId]);
        }catch(PDOException $e){
            $_SESSION['msg'] = 'Erro ao inserir imagem'.$e;
        }
    }
    public function listAll()
    {
        $sql = $this->con->prepare('SELECT i.caminho, i.descricao, c.nome FROM imagem i JOIN categoria c ON i.categoria = c.id WHERE i.userId = ?');
        $sql->execute([$this->userId]);
        $row = $sql->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }
    //getters and setters 
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getCaminho()
    {
        return $this->caminho;
    }
    public function setCaminho($caminho)
    {
        $this->caminho = $caminho;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}
