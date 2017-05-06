<?php

require('config.php');

$data = $_POST['data'];

$user = $data['user'];
$pass = $data['pass'];

$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysqli_real_escape_string($con, $user);
$pass = mysqli_real_escape_string($con, $pass);

$qry = mysqli_query($con, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
$row = mysqli_num_rows($qry);

if($row == 1) {
    $response = array('success' => true);
    echo json_encode($response);
} else {
    $response = array('success' => false);
    echo json_encode($response);
}

mysqli_close($con);

?>