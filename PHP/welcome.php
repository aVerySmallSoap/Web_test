<?php
require "Sanitizer.php";
$obj = new Sanitizer();
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

if(!$obj->sanitize($username, $email, $password)){
    header("Location: ../index.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/welcome.css">
    <title>Welcome <?php echo $username?></title>
</head>
<body>

    <div id="navigation-container">
        <div id="navigation-content">
            <ul class="content">
                <li id="nav-title">Some Random Title</li>
                <a href="" class="item-click"><li class="item">Home</li></a>
                <a href="" class="item-click"><li class="item">Store</li></a>
                <a href="" class="item-click"><li class="item">About Us</li></a>
            </ul>
        </div>
    </div>


    <div id="container">
        <div id="container-header">
            <span id="title">User Information</span>
            <div id="container-inform-holder">
                <div class="entry-row">
                    <label class="entry-label">Username:</label>
                </div>
                <div class="entry-row">
                    <span class="entry"><?php echo $username?></span>
                </div>
                <div class="entry-row">
                    <label class="entry-label">Email:</label>
                </div>
                <div class="entry-row">
                    <span class="entry"><?php echo $email?></span>
                </div>
                <div class="entry-row">
                    <label class="entry-label">Password:</label>
                </div>
                <div class="entry-row">
                    <span class="entry"><?php echo $password?></span>
                </div>
            </div>
        </div>
        <div id="container-left">
            INSERT PICTURE HERE
        </div>
    </div>




    <script src="../JS/welcome.js"></script>

</body>
</html>

