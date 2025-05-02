<?php
include 'header.inc';
session_start();

//santiize inout
function sanitise_input($data) {
    $data = trim($data);
    $data = trim(stripslashes($data));
    $data = htmlspecialchars($data);
    return $data;
}

// sanitizing user input values
$username = sanitise_input($_POST['username']);
$password = sanitise_input($_POST['password']);
$token = sanitise_input($_POST['token']);

// hardcoded user credentials
$correct_username = 'john';
$correct_password = '1234';

if ( $username === $correct_username && $password === $correct_password && $token === 'abc123') {
    $_SESSION['user'] = $_POST['username'];
    header("Location: welcome.php");
    exit();
} else {
    echo "invalid login <a href='login.php'>Try again</a>";
}

include 'footer.inc';
?>
