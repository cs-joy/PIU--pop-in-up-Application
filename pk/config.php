<?php

include("E:\php-todo_application\config\config.php");

// Object oriented(OOP) way to connect database
$con = new mysqli($server, $user, $password, $db_name);
if($con->connect_error) {
    die("Connecttion failed: " . $con->connect_error);
}


// PDO way to connect database
/*
try {
  $con = new PDO("mysql:host=$server;dbname=php", $user, $password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
*/

// procedural way to connect database
/*
$con = mysqli_connect($server, $user, $password, $db_name);

if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
*/