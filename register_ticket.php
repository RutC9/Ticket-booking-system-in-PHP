<?php
session_start();
include 'connect_database.php';
$firstname=$lastname=$contact=$address=$city=$state=$country=$zipcode=$user='';
if(isset($_POST['submit']))
{
    if(!empty($_POST['first_name']))
    {
        $firstname=$_POST['first_name'];
        $_SESSION['firstname']=$_POST['first_name'];
    }   
    if(!empty($_POST['last_name']))
    {
        $lastname=$_POST['last_name'];
        $_SESSION['lastname']=$_POST['last_name'];
    }
    if(!empty($_POST['contact_number']))
    {
        $contact=$_POST['contact_number'];
        $_SESSION['contact']=$_POST['contact_number'];
    }
    if(!empty($_POST['address']))
    {
        $address=$_POST['address'];
        $_SESSION['address']=$_POST['address'];
    }
    if(!empty($_POST['city']))
    {
        $city=$_POST['city'];
        $_SESSION['city']=$_POST['city'];
    }
    if(!empty($_POST['state']))
    {
        $state=$_POST['state'];
        $_SESSION['state']=$_POST['state'];
    }
    if(!empty($_POST['country']))
    {
        $country=$_POST['country'];
        $_SESSION['country']=$_POST['country'];
    }
    if(!empty($_POST['zip-code']))
    {
        $zipcode=$_POST['zip-code'];
        $_SESSION['zipcode']=$_POST['zip-code'];
    }
    // $user=$_SESSION['customer'];
    $fromloc=$_SESSION['from_city'];
    $toloc=$_SESSION['to_city'];
    $tname=$fromloc .' '. $toloc;
    $_SESSION['tname']=$tname;
    $date=$_SESSION['date'];


    
    
    $insert="INSERT INTO `tickt_data`(train_name, toloc, fromloc,traveldate, firstname, lastname, contactnumber, address,city, state, zipcode) VALUES ('$tname','$toloc','$fromloc','$date','$firstname','$lastname','$contact','$address','$city','$state','$zipcode')";

    if ($database->query($insert) === TRUE) 
    {
        echo "New record created successfully";
        $_SESSION['update']='Details updated successfully';
        $_SESSION['tkt_booked']='true';
        echo '<script> window.location.href = "myaccount.php";</script>';
    }
    else 
    {
        echo "Error: " . $insert . "<br>" . $database->error;

    }
}

    



?>