
<?php

session_start();

include("./connection/connect.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // save to database
        $user_id = random_num(20);
        $sql = "INSERT INTO users (user_id, user_name, password) VALUES('$user_id', '$user_name', '$password')";
        mysqli_query($connection, $sql);

        //header("Location: login.php");
        //die;
    } else {
        echo "Please submit your valid information!";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PIU Application | Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <h3 style="text-align: center; color: #996523">Sign up</h3>
        </div>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="johndoe@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passHelp">
                <div id="passHelp" class="form-text text-danger">* minimum 8 characters required!</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            <div class="text-primary">
                <hr />
            </div>
            <p>Already have an account? <a href="login.php" style="text-decoration: none">Login</a></p>
        </form>
    </div>
</body>

</html>