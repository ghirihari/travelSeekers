<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
date_default_timezone_set('Asia/Kolkata');

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,"travel_seekers");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['place'])){
		$place = $_POST["place"];
		$image = $_POST["image"];
		$description = $_POST["description"];
		
		$stmt = "INSERT INTO ts_article SET 
			fld_place = '".$place."',
			fld_image = '".$image."',
			fld_description = '".$description."'";

		if(mysqli_query($conn,$stmt))
		{
			
			header("Location: http://localhost/advweb/project/admin/article.php"); 
			exit();
		}else{
			echo "NOT EXCECUTED";
			echo $stmt;
		}
		

	}
	
	}
	else{
	//	echo "Nothing Found";
	}
	
  ?>
