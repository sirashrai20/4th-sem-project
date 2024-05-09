<?php

  session_start();

 ?>


<div class="check">
      <nav>
      <input id="nav-toggle" type="checkbox">
        <div class="logo"><strong>SAHYOG</strong></div>
          <ul class="links">

            <?php 
            
                if(!isset($_SESSION["email"])){
            ?>
                   <li><a href="index.php" <?php  if($pagename == 'home'){ echo 'class = "active"';}else{ 'class = " "'; }?> >Home</a></li>
            <?php  
            }
              else{

            ?>
                <li><a href="donate.php" <?php  if($pagename == 'donate'){ echo 'class = "active"';}else{ 'class = " "'; }?> >Home</a></li>  
               
            <?php 
              }


            ?>
            <li><a href="whysahyog.php" <?php  if($pagename == 'WhySAHYOG'){ echo 'class = "active"';}else{ 'class = " "'; }?> >Why SAHYOG </a></li>
            <li><a href="feedback.php" <?php  if($pagename == 'feedback'){ echo 'class = "active"';}else{ 'class = " "'; }?>>Feedback</a></li>
            <li><a href="contact.php" <?php  if($pagename == 'contact'){ echo 'class = "active"';}else{ 'class = " "'; }?>>Contact</a></li>
            <?php 
              

                if(isset($_SESSION["email"])){
            ?>

                  <li><a href="user_profile.php" <?php  if($pagename == 'profile'){ echo 'class = "active"';}else{ 'class = " "'; }?> >Profile</a></li>
                   <li><a href="logout.php">Log Out</a></li>

            <?php      
              }


            ?>
            
           
          </ul>
          <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </label>
    </nav>
  </div>
