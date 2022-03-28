<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();}

    include 'connect_database.php';
    $sql = "delete FROM tickt_data";
    mysqli_query($database, $sql);
    $_SESSION['firstname']='';
    $_SESSION['lastname']='';
    $_SESSION['contact']='';
    $_SESSION['address']='';
    $_SESSION['city']='';
    $_SESSION['state']='';
    $_SESSION['country']='';
    $_SESSION['zipcode']='';
    $_SESSION['from_city']='';
    $_SESSION['to_city']='';
    $_SESSION['tname']='';
    $_SESSION['date']='';
    header('location:myaccount.php')    

?>