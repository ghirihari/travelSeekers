<!DOCTYPE html>
<?php
include "../config.php"
?>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);

$stmt = "DELETE FROM ts_contact_details WHERE fld_id =".$q.";";

if(mysqli_query($conn,$stmt))
        {
            echo "Deleted Succesfully";
            header("Location: http://localhost/advweb/project/admin/messages.php"); 
			exit();
        }else{
            echo "NOT EXCECUTED";
        }
?>

        
</body>
</html>
