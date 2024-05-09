
<?php 
session_start();

$id = $_SESSION['id'];
 
  if(isset($_SESSION['id'])){

    include "admin/connection.php";

    if(isset($_POST['save'])){
    	$first_name = $_POST['fname'];
    	$last_name = $_POST['lname'];
    	$email = $_POST['email'];
    	$Phone_number = $_POST['Phone_number'];
    	$address = $_POST['address'];

    	$sql = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email', phone='$Phone_number', address='$address' WHERE id='$id'";

    	if(mysqli_query($conn,$sql)){
    		header("location:user_profile.php");
    	}
    	else{
    		echo mysqli_error($conn);
    	}
    }

    


}
?>


