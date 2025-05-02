<?php include 'header.inc'; ?>
<?php
session_start(); //starts a new or resumes a currect session
echo "<h1>You successfully logged in!</h1>";
if (isset($_SESSION['user'])) { //checks if the session variable 'user' is set
    echo "Welcome, " . $_SESSION['user'];
} else {
    header("Location: login.php");
}
?>
<?php include 'footer.inc'; ?>

