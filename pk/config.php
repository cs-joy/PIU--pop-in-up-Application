<?php

include("E:\php-todo_application\config\config.php");

$con = new mysqli($server, $user, $password, $db_name);
if(!$con) {
    die(mysqli_error($con));
}
/*
try {
  $con = new PDO("mysql:host=$server;dbname=php", $user, $password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
*/