<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/feedback1.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body>


	<?php 
        $pagename='feedback';

        include "header.php";

     ?>
	             <div class="overlay">
					<form action="feedback_handle.php" method="POST">
						<div class="container">

						<header class="head-form">
						     <h2>Feedback</h2><br>
						<hr> 
						<br>
						<p>Please help us to serve you better by taking a couple of minutes.</p> 
					</header>
					<?php
                				if(isset($_GET['error'])){ $error = $_GET['error']; 
             				 ?>
            				 <p class="error" style="color:whitesmoke;background:grey;padding: 8px; margin-top: 5px;text-align: center;width: 100%;"><?php echo $error ; unset($error); ?></p>
    					<?php
    					 } ?>
					<br>
						<div class="field-set">
                          
							<input class="form-input" id="txt-input" type="text" name="fullname" placeholder="Full name" required="full name *">
							<span class="input-item">
							<i class="far fa-user"></i>
						</span>

				            <span>
							<input class="form-input" id="txt-input" type="text" name="email" placeholder="Email Address" required="Email Address *">
							<span class="input-item">
							<i class="far fa-envelope"></i>
						</span>
                         <br><br>
						 <h4>If you have specific feedback, please write to us...</h4> 
						 <br>
						
						<textarea class="form-input" placeholder=" please write to us..." id="txt-input"name="comment"   > </textarea>
					
																				
						<input type="submit" name="apply" value="Submit" onclick="feedback()" class="button">
					</div>
					</form>
				</div>

				<div id="footer">
        <h6><font size="4" color="#E8AE9F">Follow us on social media:</font></h6><br>
                <a href='https://www.facebook.com'><img src='image/facebook.png' height="40px" /></a>&nbsp&nbsp&nbsp&nbsp
                <a href='https://www.instagram.com'><img src='image/instagram.png'height="40px" /></a>&nbsp&nbsp&nbsp&nbsp
                <a href='https://www.twitter.com'><img src='image/twitter.png' height="40px"  /></a>
               <br/><br/>
              <div class="Copyright">
            &copy; Copyright. Product Creation 
        </div>
      </div>	

<script>
	function feedback(){
		alert("Thankyou for your reveiw.");
	}
</script>










