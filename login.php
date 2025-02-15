<?php
session_start();
include 'includes/db.php';

$username = "hackinglab";
$password = "hackinglab1";

if ($_POST['username'] === $username && $_POST['password'] === $password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Invalid credentials, you dumb fuck.";
}
?>