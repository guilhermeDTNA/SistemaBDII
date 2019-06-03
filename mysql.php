<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=id8854008_sistema", "id8854008_guilhermedtna", "GNR*CAM");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
