ARTICLE.PHP
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
          <a class="navbar-brand" href="http://localhost/advweb/project/admin/">Travel Seekers -Admin Panel-</a>

          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/admin/">Customers</a></li>
            <li class="nav-item"><a class="nav-link" href="messages.php" >Messages</a></li>
            <li class="nav-item"><a class="nav-link" href="article.php" style="color:white;">Articles</a></li>
           </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div>
            <h1>Articles</h1>       
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="addart.php" method="post">
                        <input class='form-control' type="text" name='place' id='place' placeholder="Place"><br>
                        <input class='form-control' type="text" name='image' id='image' placeholder="Image Link"><br>
                        <textarea class='form-control' type="text" name='description' id='description' placeholder='Description'></textarea><br>
                        <button class="btn btn-primary form-control">Submit</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
        </div>
    </div>



</body>
</html>
