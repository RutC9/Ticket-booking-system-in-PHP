<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
    
} ?>
<?php //check if already logged in
        if(!isset($_SESSION['customer']) || empty($_SESSION['customer']) )
        {
            header('location:login.php');
        }
        
        if(empty($_SESSION['firstname']) && !empty($_SESSION['from_city']))
            {
                header('location:booking.php');
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link rel="stylesheet" href="./css/myaccount.css">
</head>

<body>
    <?php 
    include 'navigation.php';
    include 'connect_database.php';//$database  
     
    ;?>
    <section class="account">


        <div class="ticket-details">
            <div class="result">
                <h2>Your Recently Booked Ticket: </h2>
                <?php

                if(!empty($_SESSION['from_city']) && !empty($_SESSION['from_city'])){
                echo '<div class="dis">
                    <h4>Train Name: </h4><p>'.$_SESSION['from_city'].' to '.$_SESSION['to_city'].' train</p>
                </div>
                <div class="dis">
                    <h4>From:</h4><p>' .$_SESSION["from_city"] .'</p>
                </div>
                <div class="dis">
                    <h4>To: </h4><p>' .$_SESSION["to_city"] .'</p>
                </div>
                <div class="dis">
                    <h4>Date: </h4><p>' .$_SESSION["date"] .'</p>
                </div>
                <div class="dis">
                    <h4>Time of leaving: </h4> <p>10:30 pm</p>
                </div>
                <div class="dis">
                    <h4>Time of arrival:</h4>  <p>5:30 am</p>
                </div>
                <div class="dis">
                    <h4>Full Name: </h4><p>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</p>
                </div>
                <div class="dis">
                    <h4>Contact Number: </h4><p>'.$_SESSION['contact'].'</p>
                </div>
                <div class="dis">
                    <h4>Address:</h4><p> '.$_SESSION['address'].'</p>
                </div>
                <div class="dis">
                    <h4>City:</h4><p> '.$_SESSION['city'].'</p>
                </div>
                <div class="dis">
                    <h4>State:</h4><p> '.$_SESSION['state'].'</p>
                </div>
                <div class="dis">
                    <h4>country:</h4><p> '.$_SESSION['city'].'</p>
                </div>
                <div class="dis">
                    <h4>zipcode:</h4><p>'.$_SESSION['zipcode'].'</p>
                </div>';
                }
                else
                {
                    echo 'No tickets booked';
                }
                ?>
            </div>
            <div class="cancel_ticket">
                <?php
                if(!empty($_SESSION['from_city']) && !empty($_SESSION['from_city']))
                {
                    echo '<button onclick="warn()">Cancel Ticket</button>';
                }
                else
                {
                echo '<button disabled="disabled"">Cancel Ticket</button>';
                }
                ?>
            </div>
        </div>
    </section>

    <script>
    function warn() {
        if (window.confirm('Are you sure?')) {
            window.location = './cancellation.php';
        }
    }
    </script>
</body>

</html>