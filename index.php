<?php
require_once("config.php");
//$sql = new Sql();

//$usuarios = $sql->select("Select *from tb_usuarios");



//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


// Carrega uma lista de Usuários

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de Usuários buscando pelo login 

//$search = Usuario::search("j");

//echo json_encode ($search);

// Carrega um usuário usando o login e senha 
$Usuario = new Usuario();
$Usuario->login("José","32123412"); 

echo $Usuario;

?>