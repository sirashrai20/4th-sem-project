<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sahyog";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }


  if (isset($_POST["login"])){
    $email=$_POST['email'];
    $passwor=$_POST['password'];
    $pass=md5($passwor);
 
    $sql="SELECT * FROM user WHERE email='$email' AND confirm_password='$pass' AND role = 1 AND status = 'active'";
    $result=mysqli_query($conn,$sql);
    

    if (mysqli_num_rows($result)==1){ 
  
      $row=mysqli_fetch_assoc($result);

      if($row['email']==$email&& $row['confirm_password']==$pass){

        $_SESSION['fname']=$row['fname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['id'];

        header("location:donate.php");
        // exit();
      }
    } 
   else{
      header("location:form.php?error1=Incorrect email or Password");
      // exit();
    }
 }
  mysqli_close($conn);
?>
