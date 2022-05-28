<?php

session_start();

if (!isset($_SESSION['userlogin'])) {
    header("Location: log-in.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header("Location: log-in.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PIU App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <h2 style="text-align: center">Welcome to PIU</h2>
            <button class="btn btn-primary">
                <a href="index.php?logout=true" class="text-light text-decoration-none">Logout</a>
            </button>
        </div>
    </div>
</body>

</html>