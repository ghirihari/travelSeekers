<?php include 'language.php' ?>
<?php include 'config.php' ?>
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
    text-shadow:3px       5px 10px black;
    text-align: center;
    color: white;
  }

  p{
  	/*line-height: 55px;*/
  	font-size: 20px;
    font-family: 'poppins', sans-serif;
    /*text-shadow:5px       5px 10px white;*/
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

<body style="background-image: url(assets/images/sky.jpg); background-repeat:no-repeat;
    background-size:cover;">
	<nav class="navbar navbar-expand-sm navbar-inverse" style="margin-bottom: 15px;">
	    <div class="container-fluid">
	      <img class="logo"src="assets/images/logo1.png"/> 
	      <a class="navbar-brand" href="index.php"><?php echo $data['text_title']; ?></a>

	      <ul class="nav navbar-nav navbar-right">
	        <li class="nav-item"><a class="nav-link" href="about.php" ><?php echo $data['text_about'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="destination.php"><?php echo $data['text_destination'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="blog.php" style="color: white;"><?php echo $data['text_blog'] ?></a></li>
	        <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $data['text_contact'] ?></a></li>
	      </ul>
	    </div>
  </nav>

<?php
 $stmt = "SELECT * FROM ts_article";
          $result = mysqli_query($conn,$stmt);

          while($data = mysqli_fetch_array($result))
          {
            ?>
            <!-- <h1><?php echo $data["fld_place"]; ?></h1> -->
            <div class="container-fluid">
            <div class="col-md-12 ">
              <div class="row" style="margin-bottom: 15px; padding: 10px; background-color: #ffffff50; border-radius: 15px">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="<?php echo $data["fld_image"]; ?>" alt="<?php echo $data["fld_place"]; ?>">
                  </div>
                </div>
                <div class="col-md-8">
                  <h1><?php echo $data["fld_place"]; ?></h1>
                  <p><?php echo $data["fld_description"]; ?></p>
                </div>
              </div>
            </div>
            </div>
          <?php } ?>

 <!--  <div class="col-md-12">
    <div class="row" style="padding: 10px; background-color: white">
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="assets/images/finland.jpg" alt="Finland">
        </div>
      </div>
      <div class="col-md-8">
        <h1>Finland</h1>
        <p><?php echo $data['text_finland'] ?></p>
      </div>
    </div>
  </div>
 -->
</body>
</html>