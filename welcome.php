<?php
session_start(); //starts a new or resumes a currect session
if (isset($_SESSION['user'])) { //checks if the session variable 'user' is set
    echo "Welcome, " . $_SESSION['user'];
} else {
    header("Location: login.php");
}
?>

