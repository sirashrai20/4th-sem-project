<?php 
session_start();

$id = $_SESSION['id'];
 
    include "admin/connection.php";
  
if(isset($_POST['savechange'])){
    if(isset($_POST['cpw'])&&isset($_POST['npw'])&&isset($_POST['cpwd'])){

          $cpw=md5($_POST['cpw']);
          $npw=md5($_POST['npw']);
          $cpwd=md5($_POST['cpwd']);

            if(empty($cpw)){
                $error="Your Current Password does not match.";
                header("Location: user_profile.php?error=$error");
            }
            else if($npw !== $cpwd){

                $error="The Confirmation Password does not match with your New Password.";
                header("Location: user_profile.php?error=$error");

              }else{
                //hashing the password
                $id= $_SESSION['id'];

                $sql = "SELECT confirm_password
                        FROM user 
                        WHERE id= '$id' AND confirm_password= '$cpw' ";

                $result= mysqli_query($conn , $sql);

                    if(mysqli_num_rows( $result) >= 1){

                      $result1= mysqli_query($conn,"UPDATE user SET confirm_password = '$cpwd' WHERE id= '$id'");

                      if($result1){
                       echo $error = 'Your password has been updated successfully.';
                         header("Location: user_profile.php?error=$error");
                      }


                    }else{
                      echo  $error = ' New Password and confirm password does not match.';
                        header("Location: user_profile.php?error=$error");
                    }
                }

    }else{
      header("Location: user_profile.php?error=''");
      $error = '';
       exit();
    }


}else{
  $error = '';
}
?>
