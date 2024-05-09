
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<script type="text/javascript" src="js/reg_validate.js"></script>
<link rel="stylesheet" type="text/css" href="css/register.css?v=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="css/header.css?v=<?php echo time();?>">
<title>Register Form</title>

</head>
<body>
  <?php 
        $pagename="";
        include "header.php";

  ?>
  <form  action="action.php" method="POST">
    <div class="container">

      <h1 align="center">Register here!</h1>
      <p align="center">Please fulfill the requirements inorder to register and then you would be able to login.</p>
      <hr>

      <div class="container1">

        <label for="fname"><b>Firstname</b></label><br><br>
        <input type="text"  placeholder="Firstname" name="fname" id="fname" required>
        <span class="input-item">
            <i class="fas fa-user-alt"></i>
        </span> <br><br>

        <label for="lname"><b>Lastname</b></label><br><br>
        <input type="text"  placeholder="Lastname" name="lname" id="lname" required>        
        <span class="input-item">
            <i class="fas fa-user-alt"></i>
        </span> <br><br>

        <label for="email"><b>Email</b></label><br><br>
        <input type="email"  placeholder="Email" name="email" id="email" required="Email Address *">
        <span class="input-item">
           <i class="fas fa-envelope"></i>
        </span> <br><br>

        <label for="password"><b>New Password</b></label><br><br>         
        <input type="password"  placeholder="New Password" name="newpassword" id="newpassword" required>
        <span class="input-item"> 
         <!--  <i class="far fa-eye" onclick="myFunction()"> </i> --> 
        </span> <br>
          <?php if (isset($_GET['error1'])){?>
        <p class="error"><?php echo $_GET['error1']; ?></p>
        <?php } ?>
        <br>

        <label for="password"><b>Confirm Password</b></label><br><br>
        <input type="password"  placeholder="Confirm Password" name="conpassword" id="conpassword" required>
        <span class="input-item">
         <!-- <i class="far fa-eye" onclick="Function()"> </i> -->
        </span>
          <br>
          
        <br>
        
        <label for="address"><b>Address</b></label><br><br>
        <input type="text"  placeholder="Address" name="address" id="address" required><br><br>

        <label for="phone"><b>Phone number</b></label><br><br>
        <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" required>
        <span class="input-item">
              <i class="fas fa-mobile-alt "></i>
            </span>
        <br><br>
        
        <input type="checkbox" name="agree" id="agree" value="agree" required>
        <label>I agree to all the <a href="terms.php" style="color:darkorchid;"> Terms & Conditions. </a></label> <br><br><br>
        
        <button type="submit"  class="btn" id="register" name="register"> Register</button>
        
      </div>
      <br><br>
    </div>
  </form>
  <br><br>
 
</body>
</html>






