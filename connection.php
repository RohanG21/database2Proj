<?php
$host = "localhost";
$dbuser = "root";
$dbpass = ""; //no pass for root
$dbname = "collegesystem";
if(!$con = mysqli_connect($host,$dbuser,$dbpass,$dbname)) //$con stores the connection across pages
{

	die("failed to connect");

}
