<?php
session_start();
/*
var_dump($_POST);

$usuario = $_POST['usuario'] ;
$senha = $_POST['senha'];

echo $usuario,$senha;
*/

include('../conecta.php');

$usuario = $_POST['usuario'] ;
$senha = $_POST['senha'];

echo $usuario;
echo $senha;

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}else{


$usuario = mysqli_real_escape_string($link, $_POST['usuario']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);

echo $usuario;
$query = "SELECT * FROM `usuarios` WHERE `Nome_User` = '$usuario' AND `Senha_User` = '$senha'";
$result = mysqli_query($link, $query);
echo $query;
$row = mysqli_num_rows($result);

echo $row;

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}

}




