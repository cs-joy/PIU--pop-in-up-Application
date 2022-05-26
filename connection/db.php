<?php

include('E:\php-todo_application\config\config.php');

try {
    $conn = new PDO("mysql:host=$server;dbname=$db_name", $user, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>