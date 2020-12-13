<?php 

require_once("config.php");


//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(5);
//echo $root;


//Carrega todos os usuarios

//$list = Usuario::getList();
//echo json_encode($list);


//FAZ UM SEARCH
//$search = Usuario::search("j");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("Maria", "root");

//echo $usuario;

//Insere um novo usuario
//$aluno = new Usuario("aluno2", "senha");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();

//echo $aluno;

//Update usuario

//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "senha43");
//echo $usuario;

//Apaga um registo

$usuario = new Usuario();
$usuario->loadById(12);
$usuario->delete();

echo $usuario;


?>