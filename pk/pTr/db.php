<?php

require_once('E:\php-todo_application\config\config.php');

try {
    $db_connection = new PDO('mysql:host='.$server.';dbname='.$db_name, $user, $password);
    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}