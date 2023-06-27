<?php


include "../../../classes/Doctor.php";

$d = new Doctor();

if(isset($_POST['sign_in'])){
        $d->signIn($_POST);


}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../../../js/formValidation.js"></script>
</head>
<body>
<img class="wave" src="../../../img/wave.svg">
<div class="container">
    <div class="img">
        <img src="../../../img/bg1.svg">
    </div>
    <div class="login-content">
        <form action=""  method="post">
            <img src="../../../img/avatar.svg">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" class="input" id="userName" name="name">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" id="pwd" name="pwd">
                </div>

            </div>

            <input type="submit" class="btn" name="sign_in" value="Sign In">
            <a href="signUp.php">Haven't an account? Create a new one</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="../../../js/main.js"></script>
</body>
</html>
