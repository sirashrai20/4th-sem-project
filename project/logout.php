s<?php

$servername="localhost";
$username="root";
$password="";
$dbname="sahyog";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	die ("Error in connection:".mysqli_connect_error());
}

session_start();

session_unset();

session_destroy();

header("Location:index.php");

?>