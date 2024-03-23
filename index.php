<?php
  session_start();
  	include("connection.php");
        include("function.php");
        $user_data = check_login($con);
  
?>

  <!DOCTYPE html>
  <html>
  <head>
     <title> My index page </title>
  </head>
  <body>
   <a href = "logout.php"> Logout </a>
   <h1> This is the index </h1>
   <p> <a href = "changeinfo.php"> change profile and login details </a> </p>
   
  </body>
  </html>
