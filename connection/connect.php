<?php
include('E:\php-todo_application\config\config.php');

$db = "php";

$connection = new mysqli($server, $user, $password, $db);

if($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

?>