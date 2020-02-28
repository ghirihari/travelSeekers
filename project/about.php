<?php include 'language.php' ?>
<html lang="en">
<head>
  <title>Travel Seekers</title>
   <link rel = "icon" href = "assets/images/logo1.png" type = "image/x-icon"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="assets/css/common.css" rel="stylesheet">
  <style>
  	 h1{
    font-size: 50px;
    font-family: 'poppins', sans-serif;
    text-shadow:5px       5px 10px black;
    text-align: center;
    color: white;

  }

  h2{
  	 font-size: 20px;
    font-family: 'poppins', sans-serif;
    text-shadow:5px       5px 10px black;
    text-align: center;
    color: white;
  }

  p{
  	line-height: 55px;
  	font-size: 20px;
    font-family: 'poppins', sans-serif;
    text-shadow:5px       5px 10px black;
    text-align: center;
    /*color: white;*/
  }

  .about{
  	background-color: rgba(0,0,0,0.3);
    border-radius: 20px;
    color: white;
    margin-top: 10%;
  }
</style>
</head>

<body style="background-image: url(assets/images/contac.jpg); background-repeat:no-repeat;
    background-size:cover;">
	<nav class="navbar navbar-expand-sm navbar-inverse">
	    <div class="container-fluid">
	      <img class="logo"src="assets/images/logo1.png"/> 
	      <a class="navbar-brand" href="index.php"><?php echo $data['text_title']; ?></a>

	      <ul class="nav navbar-nav navbar-right">
	        <li class="nav-item"><a class="nav-link" href="about.php" style="color: white;"><?php echo $data['text_about'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="destination.php"><?php echo $data['text_destination'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="blog.php"><?php echo $data['text_blog'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href=contact.php"><?php echo $data['text_contact'] ?></a></li>
	        <!-- <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#myModal" href="#"><?php echo $data['text_register'] ?></a></li> -->

	        <!-- <li class="nav-item"><a class="nav-link" href="message.php">MESSAGES</a></li> -->
	      </ul>
	    </div>
  </nav>

  <div style="text-align: center">
  	<!-- <h1>Travel Seekers</h1>
  	<h2>Who are we?</h2> -->
  	<div class="container about">	
  		<p>
Welcome to Travel Seekers, your number one source for travel. We're dedicated to giving you the very best of service, with a focus on three characteristics, ie: dependability, customer service and uniqueness.
Founded in 2019 by us, We Travel Seekers has come a long way from its beginnings in a home office, toolshed, Coimbatore, India. When we first started out, our passion for travel and love on nature drove us to this. We now serve seekers all over world, and are thrilled to be a clan who loves and saves our dear planet.<br>
--ALL COPYRIGHTS RESERVED ©--
</p>
	</div>
	<h1>Not all those who wander are lost.</h1>
	<h2>~ J.R.R Tolkien</h2>
  </div>
</body>
</html>