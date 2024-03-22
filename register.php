<?php 
session_start();
	include("connection.php");
	include("function.php");
?>
<html>
<head>
 <title>  Register </title>
</head>
<body>
	<div id = "register_box">
		<form method = "post" action= "useregisdata.php" >
			<div> <h2> Register </h2> </div>
                <p> email </p>
				<input id = "semail" type= "email" name = "user_name" > <br> <br>

				<p> Legal first name </p>
				<input id = "fname" type = "text" name="f_name"> <br> <br>

				<p> Legal last name </p> 
				<input id = "lname" type = "text" name = "l_name"> <br> <br>

                <p> password </p>
				<input id = "password" type = "password" name= "pass" > <br> <br>

			 	<p> confirm password </p>
                <input id = "password2" type = "password" name = "pass2" > <br> <br>

				<input id = "button" type= "submit" value = "Signup"> <br> <br> 
				<a href = "login.php" > Click to Login </a> <br> <br>
		</form>
	</div>
</body>
</html>  
