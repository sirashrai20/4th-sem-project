
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" href="css/donor.css?v=<?php echo time(); ?>">
		<title>Donation applications</title>
	</head>
	<body>
		<?php 
				$pagename ="";
        include "header.php";

     ?>
		<div class="container">
			<div class=" text">
			<h1 >Donation Applications</h1>
			<hr>
			<?php
                if(isset($_GET['error'])){ $error = $_GET['error']; 
              ?>
             <p class="error" style="color:white;background:powderblue;padding: 2px; margin-top: 5px;"><?php echo $error ; unset($error); ?></p>
    <?php
     } ?>
			</div>
			<div class="row">
				<?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "sahyog";

                      // Create connection
                      $conn = mysqli_connect($servername, $username, $password, $dbname);
                      // Check connection
                      if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                        }
                        $selectquery="SELECT * FROM request LEFT JOIN donation_mode ON request.mode = donation_mode.id WHERE request_status = 'Accepted'";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                        	$imageurl=$res['image'];

                ?>
		<div class="col-md-4 main mb-4" >
			
			
            <div class="application-cards">
				 <div class="image" >

					<img src='uploads/<?php echo $imageurl; ?>' >
				</div> 
				<div class="title">
					<h1> <?php echo $res['agenda']; ?> </h1>
				</div>
				<div class="des">
					<p> <?php echo $res['help']; ?> </p>
				</div>
				<div class="click">
				<a href="donation-form.php?mode_id=<?php echo $res['mode']; ?>&&request_id=<?php echo $res['request_id']; ?>" name="donate" >Donate <?php echo $res['modes']; ?></a>
				</div>
			</div>
			
		</div>
		<?php
          }
     ?>
		</div>
		</div>
	</body>
</html>
