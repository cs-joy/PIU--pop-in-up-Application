
<?php

session_start();

if(isset($_SESSION['userlogin'])){
    header("Location: main.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | HIP</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" id="login" name="login" value="Login">
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </form>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#login').click(function(e){
                var valid = this.form.checkValidity();
                if(valid){
                    var username = $('#username').val();
                    var password = $('#password').val();
                }
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'incredential.php',
                    data: {username: username, password: password},
                    success: function(data) {
                        alert(data);
                        if($.trim(data) == "Successfully Login"){
                            setTimeout('window.location.href= "main.php"', 2000);
                        }
                    },
                    error: function(data) {
                        alert('error');
                    }
                })
            });
        });
    </script>
</body>

</html>