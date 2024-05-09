
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="css/doni.css?v=<?php echo time(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'>
		<title>Help Application</title>
	</head>
	<body>
		<?php 
				$pagename = "";
        include "header.php";

     ?>
     <section>
     	<br>
		<div class="container">
			 <form action="doneehandle.php" method="POST" enctype="multipart/form-data" >
			
				<h1 align="center">! HELP APPLICATION !</h1><br>
				<p align="center">Kindly fill up this application & elaborate your requirements.</p>
				<hr>
				<div class="container1">
					<label>Your agenda</label><br>
					<input type="text" placeholder="Why you need help?" name="agenda" id="agenda" required><br><br>
					<label>Help you need in?</label><br>
					<textarea name="help" id="help" cols="50" rows="6" placeholder="Describe what type of help you need from us?"></textarea><br><br>
					<label>Image</label> <br>
					<div class="choose">
					Choose File
					<input type="file" name="file" class="file">
				   </div>
					<br><br><br>
					<label>Help you need in particular medium:</label><br><br>
					<input type="checkbox" name="medium" value="1">
					<label>Cash</label>&nbsp&nbsp&nbsp
					<input type="checkbox" name="medium" value="2">
					<label>Clothes</label>&nbsp&nbsp&nbsp
					<input type="checkbox" name="medium" value="3">
					<label>Food</label>&nbsp&nbsp&nbsp
					<input type="checkbox" name="medium" value="4">
					<label>Others</label>
				</div> <br>
					<input type="submit" name="apply" value="apply" class="button">
		
			</form> 
		</div>
     </section>
	</body>
</html>
