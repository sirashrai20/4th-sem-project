
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONATE</title>
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/donate.css?v=<?php echo time(); ?>">
  </head> 
  <body style="overflow: hidden;">

     <?php 
        $pagename='donate';
        include "header.php";

     ?>
     
    <div class="bg-img">
      <div class="image">
        <img src="image/family.jpg" alt="family">
      </div>
      <div class="head-text">
        <h1>Together We Can</h1>
        <hr>
      </div>
      <div class="text"> 
        <h2>Do you want to make contribution?</h2><br>
        <button class="donate"><a href="donor.php" style="text-decoration-line: none">Donate</a></button><br><br>
        <h2>Do you need help?</h2><br>
        <button class="help"><a href="donee.php" style="text-decoration-line: none">Help</a></button>
        <?php
                if(isset($_GET['error'])){ $error = $_GET['error']; 
              ?>
             <p class="error" style="color:whitesmoke;background:#1a0f00;padding: 8px; margin-top: 5px;"><?php echo $error ;  ?></p>
    <?php
     } ?>
      </div>
    </div>
  </body>
</html>

