<?php

$host="database-1.c1omwsmo8j0a.ap-south-1.rds.amazonaws.com";
$user="admin";
$password="password";
$db="mydb";

$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){
die("Database connection failed");
}

?>
