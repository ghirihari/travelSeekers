<?php
session_start();

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
 if(isset($_POST['c_name'])){
		$name = $_POST["c_name"];
		$email = $_POST["email"];
		$phoneno = $_POST["phno"];
		$msg = $_POST["msg"];
		$date_created = date('Y-m-d H:i:s');

		$stmt = "INSERT INTO ts_contact_details SET 
			fld_name = '".$name."',
			fld_email = '".$email."',
			fld_mobile = '".$phoneno."',
			fld_msg = '".$msg."',
			fld_date_created = '".$date_created."'";

			//echo $stmt;
		
		if(mysqli_query($conn,$stmt))
		{
		//	echo "executed";
			$_SESSION["send_status"] = '1';
			//print_r($_SESSION);
			//header("Location: http://localhost/advweb/project/contact.php"); 
			//exit();
		}else{
			echo "NOT EXCECUTED";
			echo $stmt;
		}
	
	}
}
