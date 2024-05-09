<?php

$servername="localhost";
$username="root";
$password="";
$dbname="sahyog";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	die ("Error in connection:".mysqli_connect_error());
}
if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	

	$sql="INSERT INTO contact (name,email,message)
					  Values('$name','$email','$message')";
	
	
	if (mysqli_multi_query($conn,$sql)) {
		
				header("location:contact.php");
			}
		 	else{
		 		echo "Error".$sql."<br>".mysqli_error($conn);
		 }

}
mysql_close($conn);
?>