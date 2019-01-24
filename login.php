<?php
session_start();

define('HOST', 'localhost');
define('USUARIO', 'root');
<<<<<<< Updated upstream
define('SENHA', 'timorleste');
define('BD', 'dbii');
=======
define('SENHA', '12345');
define('BD', 'SistemaBD');
>>>>>>> Stashed changes

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não foi possivel conectar');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: home.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select usuario from diretor where usuario = '{$usuario}' and senha ='{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
		echo"<script language='javascript' type='text/javascript'>alert('Bem Vindo $usuario');window.location.href='./index.php';</script>";	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: home.php');
	exit();
}
	
