<?php
session_start();
include_once './valida_login.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $sql = "INSERT INTO aluno (nome_aluno,sobrenome_aluno,email_aluno, data_nasc, rua_aluno, numero, cidade_aluno, estado_aluno) VALUES (:nome_aluno,:sobrenome_aluno,:email_aluno, :data_nasc, :rua_aluno, :numero, :cidade_aluno, :estado_aluno)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':nome_aluno', $_REQUEST['nome_aluno']);
    $stmt->bindParam(':sobrenome_aluno', $_REQUEST['sobrenome_aluno']);
    $stmt->bindParam(':email_aluno', $_REQUEST['email_aluno']);
    $stmt->bindParam(':data_nasc', $_REQUEST['data_nasc']);
    $stmt->bindParam(':rua_aluno', $_REQUEST['rua_aluno']);
    $stmt->bindParam(':numero', $_REQUEST['numero']);
    $stmt->bindParam(':cidade_aluno', $_REQUEST['cidade_aluno']);
    $stmt->bindParam(':estado_aluno', $_REQUEST['estado_aluno']);
    // Execute the prepared statement
    $stmt->execute();
    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='addAluno.php'</script>";

    //echo"<script language='javascript' type='text/javascript'>window.location.href='./addAluno.php';</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());

    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='addAluno.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>