<?php

include("config.php");

if (isset($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = sha1($_POST['password']);

    $query = "INSERT INTO piu_users (firstname, lastname, email, phone, password) VALUES(?, ?, ?, ?, ?)";
    $stmtinsert = $con->prepare($query);
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $phone, $password]);
    
    if ($result) {
        echo "Data Saved Successfully!";
    } else {
        echo "There were errors while saving the data!";
    }
} else {
    echo "There is no data!";
}