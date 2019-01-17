<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $id = $_POST['id_despesa'];

    $sql = "DELETE FROM despesa WHERE id_despesa = $id";

    $stmt = $pdo->prepare($sql);
    
    $stmt->execute();

    
    echo"<script language='javascript' type='text/javascript'>window.location.href='./removeDespesa.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>




