<?php 

require_once("config.php");

//carrega um usuário
/*$root = new Usuario();
$root->loadById(5);

echo $root;*/

//carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("jo");
echo json_encode($search);*/

//carrefa um ususario usando um login e a senha
$usuario = new Usuario();
$usuario->Login("jose", "123");

echo $usuario;

 ?>