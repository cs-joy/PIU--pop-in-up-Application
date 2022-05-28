<?php

require_once('E:\php-todo_application\config\config.php');
/*
$con = new PDO('mysl:host=loclhost;dbname='. $db_name .';charset=utf8', $user, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
$db = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);