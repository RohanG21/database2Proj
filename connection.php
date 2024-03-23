<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "collegesystem";
if(!$con = mysqli_connect($host,$dbuser,$dbpass,$dbname))
{

	die("failed to connect");

}
