<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="css/donation-option.css">
		<link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
		<title>Donation Ways</title>
	</head>
	<body>
	<?php 

		$pagename ="";
        include "header.php";
        $id = $_GET['mode_id'];
		$request_id = $_GET['request_id'];
		include "admin/connection.php";

     ?>
		    <form action="donation_form_handle.php" method="POST">
		    	
		    	<h1>Please fill up the reqiurements given below:</h1>
		    	<hr>
		    	
		    <div class="con">
              <div class="field-set">

				<input type="hidden" name="mode_name" value="<?php echo $id; ?>">
				<input type="hidden" name="request_id" value="<?php echo $request_id; ?>">
              	<?php
              	
              	 if($id==1){ 
				?>

				<label for="amount"><b>Amount(in Rs)</b></label><br>
		    		<input class="form-input" id="txt-input" type="text" placeholder="Amount you want to donate" name="amount" id="amount" required ><br><br>

				<?php
				 }
					if($id==2 || $id==3 || $id==4){ 
				?>

				<label for="quantity"><b>Quantity<b></label><br>
		    		<input class="form-input" id="txt-input"  type="text" placeholder="No. of products you want to donate.." name="quantity" id="quantity" required ><br><br>
              	 
				<?php
					}
				

					if($id==2 || $id==3){ 
				?>

				<label for="category"><b>Category<b></label><br>
		    		<input class="form-input" id="txt-input" type="text" placeholder="Type of product you want to donate.." name="category" id="category"><br><br>
              	 
				<?php
					}
				
					if($id==4){ 
				?>

				<label for="type"><b>Type</b></label><br>
		    		<input class="form-input" id="txt-input" type="text" placeholder="Type of donation you want to provide" name="type" id="type"><br><br>
              	 
				<?php
					}
				?>
		  
		    	<label for="location"><b>Pick up location</b></label><br>
		    	<input class="form-input" id="txt-input" type="text" placeholder="Your address" name="location" id="location" required><br><br>

		    	<label for="contact_number"><b>Contact Number</b></label><br>
		    	<input class="form-input" id="txt-input" type="text" placeholder="Your contact Information" name="contact" id="contact" required><br><br>

		    	<!-- <input type="hidden" value="<?php echo $_GET['agenda'];?>" name="agenda" > -->
		    	
				<button name="send" id="send" onclick="cash()">Send</button>
			</div>
            </div>
		    </form>
	</body>
</html>

