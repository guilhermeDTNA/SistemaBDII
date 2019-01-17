<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $id = $_POST['id_matricula'];
    $id_curso = $_POST['id_curso'];

    $sql = "DELETE FROM matricula WHERE id_matricula = $id; UPDATE curso SET qtd_alunos=qtd_alunos-1 where id_curso = $id_curso; ";

    $stmt = $pdo->prepare($sql);
    
    $stmt->execute();

    
    echo"<script language='javascript' type='text/javascript'>window.location.href='./removeMatricula.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>





