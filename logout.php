<?php 
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['name']);
unset($_SESSION['userdata']);
header("Location: login.php");
?>

