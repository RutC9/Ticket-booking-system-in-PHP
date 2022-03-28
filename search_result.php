<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
    
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./styles/search.css">
</head>

<body>
    <?php include 'navigation.php' ?>

    <?php
     echo '<form method="post" action="booking.php" >
     <h2>Available trains</h2>
        <div class="result">
            <div class="dis">
                <h4>Train Name:</h4><p> '.$_SESSION['from_city'].' to '. $_SESSION['to_city'].' train</p><br>
            </div>
            <div class="dis">
                <h4>From:</h4><p>' .$_SESSION['from_city'] .'</p><br>
            </div>
            <div class="dis">
                <h4>To: </h4><p>' .$_SESSION['to_city'] .'</p><br>
            </div>
            <div class="dis">
                <h4>Date: </h4><p>' .$_SESSION['date'] .'</p><br>
            </div>
            <div class="dis">
                <h4>Time of leaving:</h4><p> 10:30 pm</p><br>
            </div>
            <div class="dis">
                <h4>Time of arrival:</h4><p> 5:30 am</p><br>
            </div>
        </div>
        <input type="submit" class="button" value="Book Ticket">
    </form>'
    ?>
    <script src="index.js"></script>
</body>

</html>