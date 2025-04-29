<?php
session_start();

$correct_username = 'john';
$correct_password = '105178766';

if ($_POST['username'] === $correct_username && $_POST['password'] === $correct_password) {
    $_SESSION['user'] = $_POST['username'];
    header("Location: welcome.php");
    exit();
} else {
    echo "invalid login <a href='login.php'>Try again</a>";
    exit();
}
?>
