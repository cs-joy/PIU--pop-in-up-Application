<?php

include("E:\php-todo_application\config\config.php");

$con = new mysqli($server, $user, $password, $db_name);

if($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}