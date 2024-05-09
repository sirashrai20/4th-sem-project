<?php
include 'admin/connection.php';

session_start();
	$token = $_GET['token'];

	$sql = "UPDATE user SET status = 'active' WHERE token = '{$token}'";
	 if(mysqli_query($conn, $sql)){ 
	 		$error="Your account has been verified successfully.";
			header("Location:http://localhost/sahyog/form.php?error=$error");
	 	
     }else{
     		$error = "Your account has not been verified";
	 		header('Location:http://localhost/sahyog/form.php?error=$error');
     }
?>