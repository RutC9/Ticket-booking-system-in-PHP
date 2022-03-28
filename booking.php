<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php //check if already logged in
        if(!isset($_SESSION['customer']) || empty($_SESSION['customer']) )
        {
            header('location:login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link rel="stylesheet" href="./styles/myaccount.css">
</head>

<body>
    <?php 
    include 'navigation.php';
    include 'connect_database.php';//$database  
     
    ;?>
    <section class="account">

        <h1 style='margin:40px 0'>
            <?php 
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                }
            ?>
        </h1>
        <div class="address-details">
            <form method='post' action="register_ticket.php">
                <ul class="flex-outer">
                    <li>
                        <label for="first-name">First Name</label>
                        <input required type="text" id="first-name" name='first_name'
                            placeholder="Enter your first name here">
                    </li>
                    <li>
                        <label for="last-name">Last Name</label>
                        <input required type="text" id="last-name" name='last_name'
                            placeholder="Enter your last name here">
                    </li>

                    <li>
                        <label for="phone">Contact Number</label>
                        <input required type="number" id="phone" name='contact_number'
                            placeholder="Enter your phone number here" pattern="[0-9]" maxlength="10">
                    </li>
                    <li>
                        <label for="address">Address</label>
                        <textarea rows="6" id="address" name='address' placeholder="Enter your address here"></textarea>
                    </li>
                    <li>

                        <label for="city">City</label>
                        <input required type="text" id="city" name='city' placeholder="Enter your City">
                    </li>
                    <li>
                        <label for="phone">State</label>
                        <input required type="text" id="state" name='state' placeholder="Enter your State">
                    </li>
                    <li>

                        <label for="country">Country</label>
                        <input required type="text" id="country" name='country' placeholder="Enter your country">
                    </li>
                    <li>
                        <label for="zip-code">Zip code</label>
                        <input required type="text" id="zip-code" name='zip-code' placeholder="Enter your Zip Code">

                    </li>


                    <li>

                        <input required type="submit" id='submit_button' name='submit' value="Confirm Booking"
                            style="margin: 20px 0 50px;">
                    </li>
                </ul>
            </form>
        </div>
    </section>

</body>

</html>