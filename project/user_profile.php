<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Profile </title>
<link rel="stylesheet" type="text/css" href="css/header.css?v=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

  

  <?php 

        
        $pagename= "profile";
        include "header.php";
        $id = $_SESSION['id'];
        include "admin/connection.php";     

  ?>

<div class="wrapper">
    <div class="right">
       <?php
                $sql="SELECT * FROM user WHERE id = '$id'";
                $query = mysqli_query($conn,$sql);
                if (mysqli_num_rows($query) === 1) {
                   $row =  mysqli_fetch_assoc($query);
                   if($row['id'] === $id){
                 
                 
                ?>
        <h2><i class="fas fa-user-circle" style="color:#ff7733; font-size:36px;"></i> &nbsp&nbsp <?php echo $row['first_name'], ' ',  $row['last_name']; ?> </h2><br><br>
        <a href="user_profile.php"><b>INFORMATION</b></a>
        <a href="activity.php"><b>ACTIVITIES</b></a><br><br>
        <hr><br>
        <div class="info">
            
            <div class="info_data">
             
               <div class="data">
                    <h4>Firstname</h4>
                    <p> <?php echo $row['first_name']; ?> </p>
                 </div>
                 <br>
                 <div class="data">
                   <h4>Lastname</h4>
                    <p><?php echo $row['last_name']; ?> </p>
              </div>
              <br>
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php echo $row['email']; ?> </p>
                 </div>
                 <br>
                 <div class="data">
                   <h4>Phone</h4>
                    <p><?php echo $row['phone']; ?> </p>
              </div>
              <br>
              <div class="data">
                   <h4>Address</h4>
                    <p><?php echo $row['address']; ?> </p>
              </div>
              <?php
                if(isset($_GET['error'])){ $error = $_GET['error']; 
              ?>
             <p class="error" style="color:whitesmoke;background:orange;padding: 5px;"><?php echo $error ; ?></p>
            <?php } ?>
            </div>
             
        </div>
        <div class="open">
          <button class="button button1" onclick="openform()"> Change Information</button>
        </div>
        <div class="open">
          <button class="button button2" onclick="changeform()"> Change Password </button>
        </div>

        <!-- change -->
       <div class="popup-overlay"></div>
         <div class="popup">
            <div class="popup-close" onclick="closeForm()">×</div>
              <div class="form">
                  <?php
                              
                      $sql="SELECT * FROM user WHERE id = '$id'";
                      $query = mysqli_query($conn,$sql);
                      if (mysqli_num_rows($query) === 1) {
                         $row =  mysqli_fetch_assoc($query);
                         if($row['id'] === $id){
                   
                   
                  ?>
                  <form action="profile_handle.php" method="POST">
                       <div class="header">
                             Change information
                       </div>
                       <hr><br>
                      <div class="element">
                         <label for="fname"><b>Firstname</b></label>
                          <input type="text"  placeholder="Firstname" name="fname" id="fname" value="<?php echo $row['first_name']; ?>" required="required">
                      </div>

                        <div class="element">
                          <label for="lname"><b>Lastname</b></label>
                            <input type="text"  placeholder="Lastname" name="lname" id="lname" value="<?php echo $row['last_name']; ?>" required="required">
                        </div>
                        <!-- <div class="element">
                          <label for="password"><b>Password</b></label>
                            <input type="password"  placeholder="Password" name="password" id="password" required="required">
                        </div> -->
                        <div class="element">
                          <label for="email"><b>Email</b></label>
                            <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $row['email']; ?>" required="required">
                        </div>
                        <div class="element">
                          <label for="phone"><b>Phone number</b></label>
                            <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="<?php echo $row['phone']; ?>" required="required">
                        </div>
                        <div class="element">
                          <label for="address"><b>Address</b></label>
                            <input type="text"  placeholder="Address" name="address" id="address" value="<?php echo $row['address']; ?>" required="required">
                        </div>
                        <div class="element">
                          <button type="submit" class="button2" name="save">Save changes</button>
                        </div>
                  </form>
                      <?php
                          }
                        }
                      ?>
              </div>
        </div>

<!-- change password -->
<div class="popup-overlay"></div>
      <div class="popup2">
         <div class="popup2-close" onclick="closeForm1()">×</div>
        <div class="form">
          
          <form action="p_change_password.php " method="POST">
           <div class="header">
                 Change Password
           </div>
           <hr><br>

          <div class="element">
             <label for="cpw"><b>Current Password</b></label>
              <input type="password"  placeholder="current_password" name="cpw" id="cpw" required="required">
          </div>

          <div class="element">
            <label for="npw"><b>New Password</b></label>
              <input type="password"  placeholder="new_password" name="npw" id="npw" required="required">
          </div>
    
          <div class="element">
            <label for="cpwd"><b>Confirm Password</b></label>
              <input type="password"  placeholder="confirm_password" name="cpwd" id="cpwd" required="required">
          </div>

          <div class="element">
            <button type="submit" class="button3" name="savechange">Save changes</button>
          </div>
      </form>
  
    </div>
  </div>
<script>
      function openform(){
        document.body.classList.add("showLoginForm");
    }
       function changeform(){
        document.body.classList.add("showchangeForm");
    }
      function closeForm(){
        document.body.classList.remove("showLoginForm");
    }
        function closeForm1(){
        document.body.classList.remove("showchangeForm");
    }

</script>

       <br><br><br><br>
      
        <div class="social_media">
            <ul>
              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
       <?php
            }
          }
          ?>
    </div>
</div>

</body>
</html>

