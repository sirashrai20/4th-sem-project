<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
  <link rel="stylesheet" href="css/form.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="bg-img"><img src="image/donation.jpg" alt="donation"></div>
  <h1 class="bg-text"> A help that brings smile.</h1>

<form action="formhandle.php" method="POST">
<div class="container">
    <label for="Email"><b>Email</b></label>
    <input type="email" placeholder="Enter  your email" name="email" required>

    <label for="Password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login">Login</button>

    <?php
                if(isset($_GET['error'])){ $error = $_GET['error']; 
              ?>
             <p class="error" style="color:whitesmoke;background:green;padding: 2px;"><?php echo $error ; ?></p>
    <?php
     } 

      if (isset($_GET['error1'])) { ?>

        <p style=" color: red; padding: 5px; margin: 10px 0;"> <?php echo $_GET['error1']; ?> </p>        
        <?php
      }
    ?>

    <button type="button" class="cancelbtn" ><a href="index.php"> Cancel</a> </button>
             
    <span class="psw"> <a href="register.php" style="text-decoration-line: none;color:#fefbd8;text-align: center; "> Are you new? </a></span> <br><br>
    
  </div>
</form>
</body>
</html>
