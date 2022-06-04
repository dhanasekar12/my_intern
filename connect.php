<?php
$host="localhost";
$username="root";
$password="";
$dbname="basics";

$con = mysqli_connect($host, $username, $password) or die ("connection string error");
mysqli_select_db($con, $dbname) or die("Connection Failed");
?>