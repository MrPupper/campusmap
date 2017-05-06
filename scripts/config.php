<?php

// Database credentials
$dbserver = 'localhost';
$dbuser = 'uog';
$dbpass = 'U2fdwrfuqPey5UP9';
$database = 'campusmap';

// Connection to database
$con = mysqli_connect($dbserver, $dbuser, $dbpass, $database);
// If connection error
if(!$con) {
    mysqli_connect_error();
    exit;
}

// Start session
session_start();

// Storing username from session if one exists
if(isset($_SESSION['curruser'])) {
    $curruser = $_SESSION['curruser'];
} else {
    // Otherwise user isn't set
    $curruser = null;
}

?>