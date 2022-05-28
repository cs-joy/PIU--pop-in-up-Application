<?php

session_start();

if(!isset($_SESSION['userlogin'])) {
    header("Location: login.php");
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Wlecome to Your Profile</h1>
    <button><a href="main.php?logout=true">Logout</a></button>
</body>
</html>