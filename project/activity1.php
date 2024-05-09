<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Activities</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/activity.css">
    <link rel="stylesheet" href="css/donate.css">

    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <?php 

        $pagename='profile';
        include "header.php";
        $id = $_SESSION['id'];
        include "admin/connection.php";
        if(isset($_SESSION['id'])){

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
        <?php 
            }
        }
        ?>
        <a href="user_profile.php"><b>INFORMATION</b></a>
        <a href="activity.php"><b>ACTIVITIES</b></a><br><br>
        <hr><br>
 <div class="projects">
            <h3>YOUR ACTIVITIES</h3>

            <a href="activity.php"><b>Donation Activities</b></a>
            <a href="activity1.php"><b>Requested Activities</b></a>
            
            <div class="projects_data">
          
            </div>
        </div>
         <table>
        <tr>
            <th>Type of Request</th>
            <th>Agenda</th>
            <th>Requests</th>
            <th>Requested_date</th>                   
        </tr>
        <?php
            $sql1="SELECT * FROM Request LEFT JOIN donation_mode ON request.mode = donation_mode.id WHERE donee_id='$id'";
            $query=mysqli_query($conn,$sql1);
            while ($row=mysqli_fetch_array($query)) {
                
            ?>
        <tr>
            <td><?php echo $row['modes']; ?></td>
            <td><?php echo $row['agenda']; ?></td>
            <td><?php echo $row['help']; ?></td>
            <td><?php echo $row['requested_date']; ?></td> 
        </tr>
        <?php
            }
        ?>
       </table>
       <br><br>
</body>
        <div class="social_media">
            <ul>
              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
    </div>
</div>
</body>
</html>

<?php
}

?>
