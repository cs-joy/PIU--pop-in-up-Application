
<?php

session_start();

include("./connection/connect.php");
include("functions.php");

$user_data = check_login($connection);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PIU Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="logout.php" class="text-light" style="text-decoration: none">Logout</a></button>
        <h1>Welcome to PIU Application</h1>
        <br />
        <p>Hello Username</p>
    </div>
</body>

</html>