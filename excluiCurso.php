<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $id = $_POST['id_curso'];

    $sql = "DELETE FROM curso WHERE id_curso = $id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();


    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='removeCurso.php'</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='removeCurso.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>


