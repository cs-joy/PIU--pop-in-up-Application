<?php

require_once('E:\php-todo_application\config\config.php');

$connection = new mysqli($server, $user, $password, $db_name);

if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}