//chronic moronic -- fire name for a food truck / dispensary
 //big body 

<?php
$serverName = "localhost";
$userName = "root";
$password = "password";// should be no specifed password! this is just saying the password is password, and is not the same.
$dbName = "collegesystem";//she wants the databse to be  called DB2 not college systems
$serverName = ini_get("mysqli.default_host");//why is this here? you are defining server name twice?
echo $serverName;

    $conn = mysqli_connect($dbName);

    if($conn) { 
        echo "sql database successfully connected to";
    }
    else {
        die("failed to connect to sql database" .mysqli_connect_error());
    }
?>



