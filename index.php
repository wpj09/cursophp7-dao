<?php 

require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrefa um ususario usando um login e a senha
//$usuario = new Usuario();
//$usuario->Login("jose", "123");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("professor", "!@#$&*");

echo $usuario;
 ?>