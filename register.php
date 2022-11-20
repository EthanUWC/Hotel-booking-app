<?php
require_once "classes/class.user.php";

$user = new User;

$success = 'Registration successful';

if (isset($_POST['theReg'])) {
    $name = trim($_POST['Name']);
    $surname = trim($_POST['Surname']);
    $username = trim($_POST['Username']);
    $email = trim($_POST['Email']);
    $password = trim($_POST['Password']);

    $register = $user->reg_user($name, $surname,$username, $email, $password);

    if ($register == $success) {
        header("location:login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Register</title>
</head>

<body>
    <div>
        <h2>Register</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <div class="row mb-3">
                    <h4 class="col-2">Name:</h4>
                    <div class="col-6">
                        <input type="text" class="form-control col-6" name="Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <h4 class="col-2">Surname:</h4>
                    <div class="col-6">
                        <input type="text" class="form-control" name="Surname">
                    </div>
                </div>
                <div class="row mb-3">
                    <h4 class="col-2">Username:</h4>
                    <div class="col-6">
                        <input type="text" class="form-control col-6" name="Username">
                    </div>
                </div>
                <div class="row mb-3">
                    <h4 class="col-2">Email:</h4>
                    <div class="col-6">
                        <input type="text" class="form-control col-6" name="Email">
                    </div>
                </div>
                <div class="row mb-3">
                    <h4 class="col-2">Password:</h4>
                    <div class="col-6">
                        <input type="password" class="form-control col-6" name="Password">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="theReg">Register</button>

        </form>
    </div>
</body>

</html>