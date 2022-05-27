<?php

if (isset($_POST['sign-up'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    echo $firstname . "" . $lastname . "" . $email . "" . $phone . "" . $password;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | PIU App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="shadow-lg p-3 mb-5 bg-body rounded" style="text-align: center">
            <h3>Registration</h3>
        </div>
        <form action="sign-up.php" method="post">
            <div class="mb-3">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>

            <div class="mb-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn btn-primary" type="submit" name="sign-up">Sign Up</button>
        </form>
    </div>
</body>

</html>