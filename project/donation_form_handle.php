<?php
session_start();

include "admin/connection.php";

if(isset($_POST["send"])){

	$mode_name=$_POST['mode_name'];
	$request_id=$_POST['request_id'];
	
	date_default_timezone_set('Asia/Kathmandu');
              $donation_date = date("Y-m-d");
              $donor_id=$_SESSION['id']; 
	if($mode_name==1 ){

	$amount=$_POST['amount'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];

	$sql="INSERT INTO `donation`(`amount`, `pick_up_location`, `contact`, `mode`, `donor_id`, `donation_date`, `request_id`) VALUES ('$amount','$location','$contact', $mode_name, $donor_id , '$donation_date' , '$request_id' )";
	if (mysqli_query($conn,$sql)) {
				$error="Thankyou for your contribution.";
				header("location:donor.php?error=$error");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($conn);
		}
	} 
	else if($mode_name==2){

		$quantity=$_POST['quantity'];
		$category=$_POST['category'];
		$location=$_POST['location'];
		$contact=$_POST['contact'];

		$sql="INSERT INTO `donation`(`quantity`,`category`, `pick_up_location`, `contact`, `mode`, `donor_id`, `donation_date`, `request_id`) VALUES ('$quantity','$category','$location','$contact', $mode_name, $donor_id , '$donation_date' , '$request_id' )";

		if (mysqli_query($conn,$sql)) {
				$error="Thankyou for your contribution.";
				header("location:donor.php?error=$error");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($conn);
		}
	}
	else if($mode_name==3){

		$quantity=$_POST['quantity'];
		$category=$_POST['category'];
		$location=$_POST['location'];
		$contact=$_POST['contact'];

		$sql="INSERT INTO `donation`(`quantity`,`category`, `pick_up_location`, `contact`, `mode`, `donor_id`, `donation_date`, `request_id`) VALUES ('$quantity','$category','$location','$contact', $mode_name, $donor_id , '$donation_date' , '$request_id' )";

		if (mysqli_query($conn,$sql)) {
				$error="Thankyou for your contribution.";
				header("location:donor.php?error=$error");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($conn);
		}
	}
	else if($mode_name==4){

		$category=$_POST['type'];
		$quantity=$_POST['quantity'];
		$location=$_POST['location'];
		$contact=$_POST['contact'];

		$sql="INSERT INTO `donation`(`quantity`,`category`, `pick_up_location`, `contact`, `mode`, `donor_id`, `donation_date`, `request_id`) VALUES ('$quantity','$category','$location','$contact', $mode_name, $donor_id , '$donation_date' , '$request_id' )";

		if (mysqli_query($conn,$sql)) {
				$error="Thankyou for your contribution.";
				header("location:donor.php?error=$error");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($conn);
		}
	}
}

mysql_close($conn);
?>

