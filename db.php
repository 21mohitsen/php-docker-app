<?php

$host="RDS-ENDPOINT";
$user="admin";
$password="password";
$db="mydb";

$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){
die("Database connection failed");
}

?>
