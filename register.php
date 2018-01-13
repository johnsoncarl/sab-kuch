<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
<title>SabKuch</title>
<link href="./css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="./css/swiper.css">

<link href="./css/style.css" rel="stylesheet">


    <link href="./css/font-awesome.min.css" rel="stylesheet">

 <script src="assets/js/modernizr.js"></script>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SabKuch</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="main.html">HOME</a></li>
            <li><a href="./aboutus.htm">ABOUT</a></li>
            <li><a href="./contact.html">CONTACT</a></li>
            <li><a href="./contact.html">LOGIN OR SIGNUP</a></li>
            <li class="dropdown">
              <a href="./main.htm" class="dropdown-toggle" data-toggle="dropdown">STORES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="food.htm">Food</a></li>
                <li><a href="single-post.html">Daily Needs</a></li>
                <li><a href="portfolio.html">Medical</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>




  <div class="container">
    <div class="row">
      <h3>SIGNUP</h3>
    </div>
    <div class="row">
      <form method="post" action="register.php" class="form" >
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>User Name</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
      </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">

      </div>
<div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group">
      <button class="btn" type="submit" name="register">Register</button>
      </div>
    </form>
    <p>Already a member,</p>
    <a href="login.php">Sign In</a>


        
    </div>
  </div>































 <div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>About</h4>
          <div class="hline-w"></div>
          <p>SabKuch is One place for more than one things</p>
        </div>
        <div class="col-lg-4">
          <h4>Social Links</h4>
          <div class="hline-w"></div>
          <p>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-tumblr"></i></a>
          </p>
        </div>
        <div class="col-lg-4">
          <h4>Our Bunker</h4>
          <div class="hline-w"></div>
          <p>
            NIT Surat Campus,<br>
            Surat,<br>
            Gujarat.          </p>
        </div>
      
      </div><! --/row -->
    </div><! --/container -->
   </div><! --/footerwrap -->
  










<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  <script src="./js/retina-1.1.0.js"></script>
  <script src="./js/jquery.hoverdir.js"></script>
  <script src="./js/jquery.hoverex.min.js"></script>
  <script src="./js/jquery.prettyPhoto.js"></script>
    <script src="./js/jquery.isotope.min.js"></script>
    <script src="./js/custom.js"></script>


   






  </body>
  </html>