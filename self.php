<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./CSS/index.css">

    <title>Log-in</title>
</head>
<body>

<div class="hidden-body">
    <div class="hidden-content">
        <a href="#"><img src="./Images/home.png" width="32" height="32" alt="Home"></a>
    </div>
</div>

<div id="container">
    <div id="container-header">
        <span class="title">Log-in <sup style="font-size: 10px;">using self</sup></span>
        <div id="container-form">
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="form-main">
                <div class="form-body">
                    <div class="form-row">
                        <label for="username-field" class="form-label">Username:</label><br>
                        <input id="username-field" class="form-input" name="username" type="text" size="25">
                    </div>
                    <div class="form-row">
                        <label for="email-field" class="form-label">Email:</label><br>
                        <input id="email-field" class="form-input" name="email" type="text" size="25">
                    </div>
                    <div class="form-row">
                        <label for="password-field" class="form-label">Password:</label><br>
                        <input id="password-field" class="form-input" name="password" type="password" size="25">
                    </div>
                    <div class="form-row form-exit">
                        <div class="btn-row">
                            <button type="submit" class="form-btn login">Login</button>
                            <a href="./PHP/registration.php"><button type="button" class="form-btn register">Register</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if(isset($_POST["username"], $_POST["email"], $_POST["password"])){
    echo $_POST["username"];
    echo $_POST["email"];
    echo $_POST["password"];
}
?>

<script src="./JS/index.js"></script>
</body>
</html>