<?php

session_start();

require_once('db.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_informations WHERE username = ? AND password = ? LIMIT 1";

    $stmt = $db_connection->prepare($sql);
    $result = $stmt->execute([$username, $password]);

    if ($result) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt-> rowCount() > 0) {
            $_SESSION['userlogin'] = $user;
            echo "Successfully Login";
        } else {
            echo "No users found";
        }
    } else {
        echo "You got an Error!";
    }
