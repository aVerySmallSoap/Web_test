<?php

    $username = $_GET["name"];
    $email = $_GET["email"];

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
    <link rel="stylesheet" href="../CSS/get.css">
    <title>Welcome <?php echo $username?>!</title>
</head>
<body>
<div id="navigation-container">
    <div id="navigation-content">
        <ul class="content">
            <li id="nav-title">Information Management System</li>
            <a href="" class="item-click"><li class="item-get">Dashboard</li></a>
            <a href="" class="item-click"><li class="item-get">Settings</li></a>
            <a href="../get.php" class="item-click logout"><li class="item-get">Log-out</li></a>
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
        </div>
    </div>
    <div id="container-left">
        <!-- Insert some code or other information-->
    </div>
</div>
<script src="../JS/welcome-get.js"></script>
</body>
</html>
