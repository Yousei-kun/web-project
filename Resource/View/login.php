<?php
session_start();
if (isset($_SESSION["logged_username"])) {
    header('Location: '."homepage.php");
}

require_once "../../igniter.php";
$controller = new LoginController();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>

<div class="container" style="height: 85vh; display: flex; justify-content: center; align-items: center">
    <div class="card" style="width: 50%;">
        <h2 style="margin: 10px auto">
            Login Page
        </h2>
        <form method="post" action="" style="margin: 0 3em 2em 3em">
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Enter username">
            </div>
            <div class="form-group mt-4">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter password">
            </div>

            <center>
                <button type="submit" name="login" class="btn btn-primary mt-4">Login</button>
            </center>
            
            Go to <a href="<?= 'register.php' ?>">Register Page</a>

            <?php
                echo "<br><b>" . $controller->auth() . "</b><br>";
            ?>



        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>