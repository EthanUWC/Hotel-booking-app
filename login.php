<?php
    session_start();

    require_once "classes/class.user.php";

    // Instantiating my user class
    $user = new User;

    // Initializing variables
    $login ="";
    $userErr ="Invalid username";
    $passErr ="Password incorrect";

    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $login = $user->$_GET($username, $password);

        if($login == true){
            header("location:home.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body class="d-flex align-items-center justify-content-center h-100">
    <div class="card col-4 p-3">
        <h2>Login</h2>
        <form method="GET">
            <div class="row mb-3">
                <h4 class="col-4">Username:</h4>
                <div class="col-6">
                    <input type="text" class="form-control col-6" name="Username">
                </div>
            </div>
            <div class="row mb-3">
                <h4 class="col-4">Password:</h4>
                <div class="col-6">
                    <input type="password" class="form-control col-6" name="Password">
                </div>
            </div>

            <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary" name="theLogin">Login</button>
            <a href="register.php" class="me-5 pe-4">Don't have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>