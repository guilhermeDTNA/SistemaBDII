<?php
session_start();

define('HOST', 'containers-us-west-132.railway.app');
define('USUARIO', 'root');
define('SENHA', 'ljKloMO8rrda3gaYBSfO');
define('BD', 'railway');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD, 7291) or die ('Não foi possivel conectar');
 
if(empty(addslashes($_POST['usuario'])) || empty(addslashes($_POST['senha']))) {
	header('Location: home.php');
	exit();
}

$senha_provisoria = addslashes($_POST['senha']);
 
$usuario = mysqli_real_escape_string($conexao, addslashes($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, md5('ABCDE'.$senha_provisoria));
 
$query = "select usuario from diretor where usuario = '{$usuario}' and senha ='{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
 //Atribui um id criptografado ao usuário e navegador
	if(empty($_SESSION['usuario'])){
		$_SESSION['usuario'] = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
	}

	//Armazena os id do usuário e do navegador
	$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

	//Verifica se os ids atuais são iguais aos armazenados
	//Se diferente, a pessoa é desconectada
	if($_SESSION['usuario'] != $token){
		//$_SESSION['nao_autenticado'] = true;
		header('Location: home.php');
		exit;
	}
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;

	echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php';</script>";
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: home.php');
	exit();
}
	
