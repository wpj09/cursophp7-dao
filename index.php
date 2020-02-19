<?php 

require_once("config.php");

$root = new Usuario();

$root->loadById(5);

echo $root;

 ?>