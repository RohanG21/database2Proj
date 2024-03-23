<?php 
    include("connection.php");
    session_start();
?>

<html>
    <body>
    <a href = "logout.php">Logout </a>
    <h1> This is the student homepage </h1> <br>
    <?php
        $userInfo = $_SESSION['userdata'];
        $sID = $userInfo['student_id'];
        $sname = $userInfo['NAME'];
        echo "<h2> student name: $sname </h2>";
        echo "<h2> Student ID: $sID </h2>";

    ?>
    <a href = "changelogin.php"> Change password </a>
    </body>
</html>
