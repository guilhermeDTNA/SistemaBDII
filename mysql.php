<?php

try {
    $pdo = new PDO("mysql:host=containers-us-west-132.railway.app;port=7291;dbname=railway", "root", "ljKloMO8rrda3gaYBSfO");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

//mysql:host=containers-us-west-132.railway.app;dbname=railway", "root", "ljKloMO8rrda3gaYBSfO
?>
