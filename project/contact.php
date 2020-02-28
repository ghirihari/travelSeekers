<?php include 'language.php' ?>
<?php include 'send.php' ?>
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
  <link href="assets/css/common.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<style>

body
  {
    background-image: url("assets/images/contact.jpg");
    background-size: cover;
  }
	.form-control{
    background-color: rgba(0,0,0,0.5);
font-family: 'Poppins', sans-serif;
    color: white;
  }
	label{
	font-size: 20px;
    font-family: 'Poppins', sans-serif;
    text-shadow:5px       5px 10px black;
    text-align: center;
    color: white;

	}

	p{
		font-size: 20px;
    	font-family: 'Poppins', sans-serif;
    	text-shadow:5px 5px 10px black;
		text-align: center;
		color: white;
	}

	h1{
		font-family: 'Poppins', sans-serif;
		    text-shadow:5px       5px 10px black;
		/*text-align: right;*/
		color: white;
	}

	.info{
		line-height: 44px;
		    background-color: rgba(0,0,0,0.3);
    padding: 30px;
    border-radius: 50px;
	}

	.contact{
		    padding: 50px;
    border-radius: 50px;
    background-color: rgba(0,0,0,0.3);
    /*width: 43%;*/
    height: 70%;
    /*margin-right: 25px;*/
	}

	.alert{
		font-family: 'Poppins', sans-serif;
		position: relative;
		margin-top: 15px;
		margin-bottom: 0px;
    border-radius: 25px;
    background-color: rgba(223,240,216,0.5);
    color: white;
	}
</style>
<body>
<nav class="navbar navbar-expand-sm navbar-inverse">
	    <div class="container-fluid">
	      <img class="logo"src="assets/images/logo1.png"/> 
	      <a class="navbar-brand" href="index.php"><?php echo $data['text_title']; ?></a>

	      <ul class="nav navbar-nav navbar-right">
	        <li class="nav-item"><a class="nav-link" href="about.php" ><?php echo $data['text_about'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="destination.php"><?php echo $data['text_destination'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="blog.php"><?php echo $data['text_blog'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="contact.php" style="color: white;"><?php echo $data['text_contact'] ?></a></li>
	        <!-- <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#myModal" href="#"><?php echo $data['text_register'] ?></a></li> -->

	        <!-- <li class="nav-item"><a class="nav-link" href="message.php">MESSAGES</a></li> -->
	      </ul>
	    </div>

  </nav>
  <div class="container" style="text-align: center;">
	  	

	  <div class="col-md-12">
	  	<div class="row" style="padding:4%;">
	  	<?php if(isset($_SESSION["send_status"])){ ?>
	  		
	  		<div class="alert alert-success">
  				<strong>Success!</strong> Your message was sent succesfully.
			</div>

		<?php session_unset(); }?>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-5 contact">
	  			<label>Contact Form</label>
	  			<form action="contact.php" method="post">
	  				<div class='form-group'>
                        <input class='form-control' type="text" name='c_name' placeholder="Enter Your Name">
                    </div>

                    <div class='form-group'>
                        <input class='form-control' type="email" name='email' placeholder="Enter Your email ID">
                    </div>

                    <div class='form-group'>
                        <input class='form-control' type="text" name='phno' placeholder="Enter Your Mobile Number">
                    </div>

                    <div class='form-group'>
                    	<label>Enter your Message</label>
                        <textarea rows=10 class='form-control' name='msg'></textarea>
                    </div>

                    <div class='form-group'>
                		<button class='form-control btn btn-danger' type="submit" style="width:50%;">Send</button> 
              		</div> 
              	</form>


	  		</div>

	  		<div class="col-md-1"></div>
	  		<div class="col-md-6 info">
	  			<div class="row">
	  			<label>Contact Information</label>
	  		</div>

	  		<div class="row">
	  			<div class="col-md-6">
	  				<label>Mobile : </label>
	  			</div>
	  			<div class="col-md-6">
	  				<label>9789409449</label>
	  			</div>	
	  		</div>

	  		<div class="row">
	  			<div class="col-md-6">
	  				<label>Email ID : </label>
	  			</div>
	  			<div class="col-md-6">
	  				<label>guide@ts.com</label>
	  			</div>	
	  		</div>

	  		<div class="row">
	  			<div class="col-md-6">
	  				<label>Instagram ID : </label>
	  			</div>
	  			<div class="col-md-6">
	  				<label>@travel_seekers</label>
	  			</div>	
	  		</div>

	  		<div class="row">
	  			<div class="col-md-6">
	  				<label>Facebook : </label>
	  			</div>
	  			<div class="col-md-6">
	  				<label>travelseekers</label>
	  			</div>	
	  		</div>

	  		<div class="row">
	  			<div class="col-md-6">
	  				<label>Address : </label>
	  			</div>
	  			<div class="col-md-6">
	  				<label>Coimbatore Institute of Technology,<br/>
	  				Peelamedu,<br/>
	  				Coimbatore,<br/>
	  				Tamil Nadu<br/>
	  			</label>
	  			</div>	
	  		</div>
	  </div>
	</div>

</body>
