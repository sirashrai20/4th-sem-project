<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="sahyog";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	die ("Error in connection:".mysqli_connect_error());
}
if(isset($_POST["apply"])){

	$agenda=$_POST['agenda'];
	$help=$_POST['help'];
	$id=$_SESSION['id'];
	$medium=$_POST['medium'];

	if(isset($_FILES['file'])){
		 $errors = array();

		  $file_name = $_FILES['file']['name'];
		  $file_size = $_FILES['file']['size'];
		  $file_tmp = $_FILES['file']['tmp_name'];
		  $file_type = $_FILES['file']['type'];
		    //  echo  $file_ext = end(explode('.',$_FILES['p_photo']['name']));
		  $file_ext = end(explode('.',$file_name));

		    $extensions = array("jpeg","jpg","png");

		    if(in_array($file_ext,$extensions) === false)
		    {
		      $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
		    }

		    if($file_size > 2097152){
		      $errors[] = "File size must be 2mb or lower.";
		    }
		    $new_name = time()."-".basename($file_name);
		    $target = "uploads/".$new_name;

		    if(empty($errors) == true){
		      move_uploaded_file($file_tmp,$target);
		    }else{
		      print_r($errors);
		      die();
		    }
  	}

			date_default_timezone_set('Asia/Kathmandu');
              $requested_date = date("Y-m-d");
	$sql="INSERT INTO request( donee_id,agenda,help,image,mode,request_status,requested_date)
					  Values($id,'$agenda','$help','$new_name','$medium','pending','$requested_date')";

	if (mysqli_multi_query($conn,$sql)) {
				$error="Your request has been submitted successfully. ";
				header("location:donate.php?error=$error");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($conn);
		}

	}			

mysqli_close($conn);
?>