<?php

$servername="localhost";
$username="root";
$password="";
$dbname="sahyog";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	die ("Error in connection:".mysqli_connect_error());
}
if(isset($_POST["apply"])){
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];

	$sql="INSERT INTO feedback (full_name,email,Comments)
					  Values('$fullname','$email','$comment')";

	if (mysqli_multi_query($conn,$sql)) {
				$error="Thankyou for you feeback.";
				header("location:feedback.php?error=$error");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($conn);
		}

}
mysql_close($conn);
?>