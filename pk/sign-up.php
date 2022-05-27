
<?php

include("config.php");

if (isset($_POST['sign-up'])) {
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
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="mb-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button class="btn btn-primary" type="submit" id="register" name="sign-up">Sign Up</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--
    <script type="text/javascript">
        $(function() {
            $('#register').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {

                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var password = $('$password').val();

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            phone: phone,
                            password: password
                        },
                        success: function(data) {
                            Swal.fire({
                                title: 'Successfull',
                                text: "Saved Successfully",
                                icon: 'success'
                            })
                        },
                        error: function(data) {
                            Swal.fire({
                                title: 'Error',
                                text: 'There were errors while saving the data',
                                icon: 'error'
                            })
                        }
                    });

                }

            });

        });
    </script>
    -->
</body>

</html>