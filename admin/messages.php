<?php include "../config.php" ?>
<?php include "../language.php" ?>
<!DOCTYPE html>
<html id="txtHint2">
<head>
	<title>Admin Panel</title>
    <link rel = "icon" href = "../assets/images/logo1.png" type = "image/x-icon"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="../assets/css/common.css" rel="stylesheet">
    <style>
    	body{

    		background-image: url("../assets/images/black-bg.jpg");
    		background-repeat:no-repeat;
    		background-size:cover;
    	}

    	.table-ts{
    		font-size: 20px;
    		font-family: 'Poppins', sans-serif;
    		text-shadow:5px       5px 10px black;
    		background-color: rgba(255,255,255,0.2);
    		border-radius: 15px;
    		color: white;
    	}

    	.table>tbody>tr>th {
    		border-top: 0px solid black;
    	}

    	 h1{
    		font-size: 40px;
    		font-family: 'Montserrat', sans-serif;
    		text-shadow:5px       5px 10px black;
    		color: white;
  			}

  		.nav{
  			font-family: 'Montserrat', sans-serif;
  		}

    </style>

    <script type="text/javascript">
    	function delModal(id) {
				console.log(id);

				if (window.XMLHttpRequest) {
		            xmlhttp = new XMLHttpRequest();
			        }
					  xmlhttp.onreadystatechange = function() {
					          if (this.readyState == 4 && this.status == 200) {
					                document.getElementById("txtHint2").innerHTML = this.responseText;
					                
					            }
					        };
			        xmlhttp.open("GET","delete_msgs.php?q="+id,true);
			        xmlhttp.send();
			 
			}
    </script>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-inverse">
	    <div class="container-fluid ls">
	      <!-- <img class="logo"src="../assets/images/logo1.png"/>  -->
	      <a class="navbar-brand" href="http://localhost/advweb/project/admin/">Travel Seekers -Admin Panel-</a>

	      <ul class="nav navbar-nav navbar-right">
	        <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/admin/">Customers</a></li>
	        <li class="nav-item"><a class="nav-link" href="" style="color:white;">Messages</a></li>
	        <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/admin/article.php">Articles</a></li>
	        
	        <!-- <li class="nav-item"><a class="nav-link" href="message.php">MESSAGES</a></li> -->
	      </ul>
	    </div>
    </nav>

	<div class="container-fluid">
    <div>
		<h1>Messages Received</h1>    	
	</div>

		<table class="table table-ts">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Message</th>
				<th>Date Sent</th>
				<th>Action</th>
			</tr>

			<?php
					$stmt = "SELECT * FROM ts_contact_details";
					$result = mysqli_query($conn,$stmt);

					while($data = mysqli_fetch_array($result))
					{ ?>

					<tr class="">
					 	<td><?php echo $data["fld_name"]; ?></td>
					 	<td><?php echo $data["fld_email"]; ?></td>
					 	<td><?php echo $data["fld_mobile"]; ?></td>
					 	<td>
					 		<?php 
					 			if(strlen($data["fld_msg"]) < 15)
					 			{
					 				echo $data["fld_msg"]; 
					 			}
					 			else{
					 				for ($x = 0; $x <= 15; $x++)
					 				{
					 					echo $data["fld_msg"][$x];
					 				}
					 				echo "...";
					 			}
					 		?>
					 		
					 	</td>
					 	<td><?php echo $data["fld_date_created"]; ?></td>
					 	<td><a class="btn btn-danger" onclick="delModal(<?php echo $data["fld_id"]; ?>)"style="background-color: red">Delete</a>
					 		

					</tr>
			<?php } ?>
		</table>
	</div>
	</div>

	<div id="txtHint2"></div>
</body>
</html>
