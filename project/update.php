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

		//$data = json_decode($formData);
		$_POST = json_decode(file_get_contents('php://input'), true);
		
		$name 		= $_POST[0]["value"];
		$phoneno 	= $_POST[1]["value"];
		$email 		= $_POST[2]["value"];
		$gender 	= $_POST[3]["value"];
		$date_created = date('Y-m-d H:i:s');

		$stmt = "INSERT INTO ts_customer_details SET 
			fld_name = '".$name."',
			fld_email = '".$email."',
			fld_mobile = '".$phoneno."',
			fld_gender = '".$gender."',
			fld_date_created = '".$date_created."'";
		if(mysqli_query($conn,$stmt))
		{
			echo "Executed";
			header("Location: http://localhost/advweb/project/index.php"); 
			exit();
		}else{
			echo "NOT EXCECUTED";
			echo $stmt;
		}
		

	}
	else{
		echo "Nothing Found";
	}
	
  ?>
