
<?php

require_once('db.php');

if(isset($_POST['create'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $query = "INSERT INTO user_informations (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $statement_insert = $db_connection->prepare($query);
    $execution = $statement_insert->execute([$username, $email, $phone, $password]);
    if($execution) {
        echo "Successfully Saved!";
    } else {
        echo "There were errors while saving your data!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <form action="registration.php" method="post">

    <label for="username">Username</label>
    <input type="text" name="username" required>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="phone">Phone</label>
    <input type="text" name="phone" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>

    <input type="submit" name="create" value="Sign Up">
    <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
</body>
</html>