<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SAHYOG</title>
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="css/home.css?v=<?php echo time(); ?>">
  <link href='https://fonts.googleapis.com/css?family=Alike Angular' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Texturina' rel='stylesheet'>
</head>
<body>
    <?php 

        $pagename='home';
        include "header.php";

     ?>
  
   <div id="body1"> 
 <div class="bgimg">
      <!-- <img src="image/child.jpg" alt="smiling child"> -->
          <h3 class="deed"> A good deed should not need a reason.</h3>
</div>
  <br><br>
      <div class="container1">
  
      <div class="text">
        <h1 align="center">" No act of kindness, <br> no matter how small, <br> is never wasted "</h1>
        <hr>
      </div>
      <div class="image">
        <img src="image/charity.jpg" style="max-width: 100% ; ">
      </div>
    </div>
    <br><br>
    <div class="children">
  <img class="mySlides" src="image/children1.jpg" >
  <img class="mySlides" src="image/children2.jpg" >
  <img class="mySlides" src="image/children3.jpg" >
</div>

<div class="container1">
      <div class="why">
        <h1 style="font-size:40px; text-align: center; color:#585c61;text-shadow: 2px 2px #000000; ">SAHYOG</h1>
         
     <h3 style="font-size:30px; text-align: center;">Sahyog is an online connector for the people to send their help cries to common public with the use of strong medium.</h3>
        <hr>
      </div>
      </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
<br><br><br>
<div class="container1">
      <div class="image">
        <img src="image/onlinedonation.jpg">
      </div>
      <div class="text1">
        <h1 align="center">" Grow your impact online "</h1>
        
      </div>
      
    </div>
    <br><br><br>
    <div class="container1">
      <div class="why">
        <h1 style="font-size:40px; text-align: center; color:#585c61;text-shadow: 2px 2px #000000; ">WHY DONATE?</h1>
         <hr>
     <h3 style="font-size:30px; text-align: center;">Donating is a selfless act being able to give back to those In need helps you achieve a greater sense of personal satisfaction and growth as human being.Also a small help can mean alot for someone in need.</h3>
        <hr>
      </div>
      </div>
      
      <br><br>
    <div class="main">
     
<h2 style="font-family: cursive; text-align: center;text-shadow: 0px 1px #000;color: #7d8b96">Some famous philanthropists:</h2><br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/gorge.jpg" alt="Jane" style="width:100%;height: 400px;">
      <div class="container2">
        <h2>George Soros</h2>
        <p>Soros has given away more than $32 billion of his personal fortune to fund the 'Open Society Foundations’ work around the world. It has supported individuals and organizations across the globe....</p>
        
        <p><button class="button"><a href="https://www.georgesoros.com/the-life-of-george-soros/"style="text-decoration: none;color:white;">Read More</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/hemani.jpg" alt="Mike" style="width:100%;height: 400px;">
      <div class="container2">
        <h2>Hemani Shah</h2>
        <p>Under the able leadership of Her Royal Highness Former Crown Princess Himani Rajya Laxmi Devi Shah, Himani trust was established. It works towards uplifting the quality of life in important sectors such as sustainable livelihood.....</p>

        <p><button class="button"><a href="https://en.wikipedia.org/wiki/Edythe_Broad" style="text-decoration: none;color:white;">Read More</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/bill.jpg" alt="John" style="width:100%;height: 400px; box-shadow:0px 8px 10px #888888;">
      <div class="container2">
        <h2>Bill Gates</h2>
        <p>Gates is a noted philanthropist and has pledged a significant amount of money to research and charitable causes during the coronavirus pandemic. He has given more than $50 billion to charity since 1994...</p>
        
        <p><button class="button"><a href="https://www.usatoday.com/story/news/factcheck/2020/06/11/fact-check-bill-gates-has-given-over-50-billion-charitable-causes/3169864001/?fbclid=IwAR2BJmJCOyspcs_Ot0Ka0QZpl_JcdSARw1oVsuGbpXwgcihrVZjhkpDSnjI"style="text-decoration: none;color:white;">Read More</a></button></p>
      </div>
    </div>
  </div>
</div>
</div>
<br><br><br>
<div class="container1">
       <div class="text1">
        <h2 align="center" style="color:#326d9c;"> Social giving<br> the power of peer-to-peer fundraising</h2>
      </div>
      <div class="image">
        <img src="image/photo1.jpg" style="height: 300px; width: 80%;">
      </div>
     

    </div>
    <br><br><br>
<div class="con">
<div class="buttoncon">
  <img src="image/nature.jpg" >
  <div class="hand"><h1 class="hands">Lets start donating!!!</h1></div>
    <h3 class="hands">Login to donate</h3>
  <button class="btn"><span><a href="form.php"style="text-decoration-line:none;color:white;">Login</a></span></button>
</div>
<div id="footer">
        <h6><font size="4" color="#E8AE9F">Follow us on social media:</font></h6>
                <a href='https://www.facebook.com'><img src='image/facebook.png' height="40px" /></a>
                <a href='https://www.instagram.com'><img src='image/instagram.png'height="40px" /></a>
                <a href='https://www.twitter.com'><img src='image/twitter.png' height="40px"  /></a>
               <br/><br/>
              <div class="Copyright">
            &copy; Copyright. Product Creation 
        </div>
      </div>
    </div>
  </body>
</html>
  


    