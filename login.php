//chronic moronic -- fire name for a food truck / dispensary
 //big body 

<?php
$serverName = "localhost";
$userName = "root";
$password = "password";
$dbName = "collegesystem";
$serverName = ini_get("mysqli.default_host");
echo $serverName;

    $conn = mysqli_connect($dbName);

    if($conn) { 
        echo "sql database successfully connected to";
    }
    else {
        die("failed to connect to sql database" .mysqli_connect_error());
    }
?>



