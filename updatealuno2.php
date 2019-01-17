<?php 
include_once("mysql.php");

	$id = $_POST['id'];
	$nome = $_POST['nome_aluno'];
	$sobrenome = $_POST['sobrenome_aluno'];
	$email = $_POST['email_aluno'];
	$data_nasc = $_POST['data_nasc'];
	$rua = $_POST['rua_aluno'];
	$numero = $_POST['numero'];
	$cidade = $_POST['cidade_aluno'];
	$estado = $_POST['estado_aluno'];
	//
try {
	echo $id;

	/*$stmt = $pdo->prepare("UPDATE aluno SET nome_aluno = $nome, sobrenome_aluno = $sobrenome, email_aluno = $email, data_nasc = $data_nasc, rua_aluno = $rua, numero = $numero, cidade_aluno = $cidade, estado_aluno = $estado WHERE id_aluno = $id");
*/	//
    // Create prepared statement
    $msql = "UPDATE aluno SET nome_aluno = '$nome', sobrenome_aluno = '$sobrenome', email_aluno = '$email', data_nasc = '$data_nasc', rua_aluno = '$rua', numero = '$numero', cidade_aluno = '$cidade', estado_aluno = '$estado' WHERE id_aluno = '$id'";

    $stmt = $pdo->prepare($msql);

    $stmt->bindParam($nome, $_REQUEST['nome_aluno']);
    $stmt->bindParam($sobrenome, $_REQUEST['sobrenome_aluno']);
    $stmt->bindParam($email, $_REQUEST['email_aluno']);
   // $stmt->bindParam($data_nasc, $_REQUEST['data_nasc']);
    $stmt->bindParam($rua, $_REQUEST['rua_aluno']);
    $stmt->bindParam($numero, $_REQUEST['numero']);
    $stmt->bindParam($cidade, $_REQUEST['cidade_aluno']);
    $stmt->bindParam($estado, $_REQUEST['estado_aluno']);

    

    // Execute the prepared statement
    $stmt->execute();
    echo"<script language='javascript' type='text/javascript'>window.location.href='./alteraAluno.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $msql. " . $e->getMessage());
}

// Close connection
unset($pdo);


 ?>