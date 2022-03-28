<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    <?php include 'css/navigation.css'?>
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,500;1,300&display=swap"
        rel="stylesheet">
</head>

<body>



    <header class="links" id="navigation_links">
        <a href="index.php">Home</a>
        <a href="myaccount.php">My Account</a>
        <?php
            if(!isset($_SESSION['customer']) || empty($_SESSION['customer']) )
        {
            echo '<a href="login.php">Login</a>';
        }
        else{
            echo '<a href="logout.php">Logout</a>';
        }
        ?>
    </header>





</body>

</html>