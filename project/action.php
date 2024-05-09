
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="sahyog";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if (!$conn) {
		die ("Error in connection:".mysqli_connect_error());
	}

	if(isset($_POST["register"])){
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$newpassword = md5($_POST['newpassword']);
		$conpassword = md5($_POST['conpassword']);
		$email = $_POST['email'];
		$address = $_POST['address'];
		$Phone_number = $_POST['Phone_number'];
		$token = bin2hex(random_bytes(15));


		if(strlen($newpassword) <= 6){
			  header("location:register.php?error1=Password too short");
          exit();
		}
		else if($newpassword != $conpassword){
			 header("location:register.php?error=Incorrect  Password");
          exit();
		}
		
			$sql = "INSERT INTO user ( first_name,last_name,email,new_password,confirm_password,phone,address,role,token,status) VALUES ( '$fname', '$lname','$email', '$newpassword', '$conpassword', '$Phone_number', '$address',  1 , '$token' , 'In-active');";


			if (mysqli_query($conn,$sql)) {
				$subject = 'verify your email';
			    $txt = 'Hi '.$fname.', Please verify your email by clicking http://localhost/sahyog/verify.php?token='.$token;
			     $headers = "From: bansalreeya@gmail.com";

			     if (mail($email, $subject, $txt, $headers)) {

			     	$error="Please, check your email to verify your account.";
				  	header("location:form.php?error=$error");

			     }else{
                          echo "Unsucessful in sending mail.";

			     }

				
			}
			else{

				echo "Error".$sql."<br>".mysqli_error($conn);
			}
		}
		
	mysqli_close($conn);
?>




