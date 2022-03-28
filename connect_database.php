<?php
/*
This file contains database connection configurationuser "root" and password ""
*/

define('DB_SERVER', 'localhost');/* localhost */
define('DB_USERNAME', 'root');/* root */
define('DB_PASSWORD', '');/*  */
define('DB_NAME', 'ticket_booking_system');/* wp_project */

// $database - variable
$database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $_SESSION['tkt_booked']=false;



?>