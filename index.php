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

$usuario = new Usuario();
$usuario->login("Maria", "root");

echo $usuario;



?>