<?php

require_once('setting.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM piu_users WHERE email= ? AND password= ? LIMIT 1";
$stmtselect = $db->prepare($query);
$result = $stmtselect->execute([$username, $password]);

if($result) {
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0) {
        echo "1";
    } else {
        echo "No users found!";
    }
} else {
    echo "Error!";
}