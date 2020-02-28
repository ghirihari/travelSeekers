<!DOCTYPE html>
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
  <link href="assets/css/common.css" rel="stylesheet">
</head>
<style type="text/css">
  .modal-content{
    background-color: rgba(0,0,0,0.5);
  }

  .modal-footer{
    background-color: blue;
  }
  .carousel-caption{
    padding-bottom: 650px;
  }
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  h1{
    font-size: 80px;
    font-family: 'Montserrat', sans-serif;
    text-shadow:5px       5px 10px black;

  }

  .visit{
     font-family: 'Montserrat', sans-serif;
     text-shadow:5px 5px 10px black;
    background-color: rgba(0,0,0,0.3);
    color: white;
    width: 40%;
  }

  .modal{
     font-family: 'Montserrat', sans-serif;
     text-align: center;
  }

  .modal-dialog{
    width: 400px;
    margin: 5% auto;
  }

  
 </style>

 <script>

  function validate()
  {
    // var name = document.forms["contact"]["name"].value;
    var name = $("#name").val();
    var phno = $("#phno").val();
    var email = $("#email").val();
    var gender = $("#gender").val();

    // alert(gender);

    //var phno = document.forms["contact"]["phno"].value;
  //  var email = document.forms["contact"]["email"].value;
//    var gender = document.forms["contact"]["gender"].value;
    //var age = document.forms["contact"]["age"].value;
    //var gender = document.forms["contact"]["gender"].value;

    

    var letters = /^[A-Za-z ]+$/;
    var numbers = /^[0-9]+$/;
    var id = /^([A-Za-z0-9._]+)@([A-Za-z0-9.]+)+$/;
              
    var txt0 = 'Submitted Succesfully';
    var txt1 = 'Submitted Succesfully';
    var txt2 = 'Submitted Succesfully';
    var txt3 = 'Submitted Succesfully';
    var txt4 = 'Submitted Succesfully';
    
    if(gender.match("Destination"))
    {   
      txt0 = 'Please select a gender';
       $('[name="gender"]').css("background-color", "crimson");
       $('[name="gender"]').css("color", "white");
       //$('[name="name"]').after('<');
    }else{
      $('[name="gender"]').css("background-color", "white");
      $('[name="gender"]').css("color", "#555");
      txt0 = '';
    }

    // if(!(age>0 && age<120))
    // {   
    //   txt = "We don't Serve immortals! ";
    // }
    
    if(!(email.match(id)  && !email.length <= 30))
    {
        txt1 = 'Enter a valid email';
        $('[name="email"]').css("background-color", "crimson");
        $('[name="email"]').css("color", "white");
    }
    else{
      $('[name="email"]').css("background-color", "white");
      $('[name="email"]').css("color", "#555");
      txt1 = '';
    }   
    
    if(!(phno.match(numbers) && phno.length == 10))
    {
        txt2 = 'Enter a valid phone number';
        $('[name="phno"]').css("background-color", "crimson");
        $('[name="phno"]').css("color", "white");
    }
    else{
      $('[name="phno"]').css("background-color", "white");
      $('[name="phno"]').css("color", "#555");
      txt2 = '';
    }

    if(!(name.match(letters)  && name.length <= 50))
    {
        txt3 = 'Enter a valid name';
        $('[name="name"]').css("background-color", "crimson");
        $('[name="name"]').css("color", "white");
    }
    else{
      txt3 = '';
      $('[name="name"]').css("background-color", "white");
      $('[name="name"]').css("color", "#555");
    }

    
    if(txt0||txt1||txt2||txt3){
      //alert(txt);
      return false;
    }else{
      return true;
    }
     
    }

$(document).ready(function(){  
  $("#contact").submit(function(e) {
    e.preventDefault();
});

  $("#sub").click(function(){
      
      if(validate()){
      var name = $("#name").val();
      var phno = $("#phno").val();
      var email = $("#email").val();
      var gender = $("#gender").val();

      var formData = JSON.stringify($("#contact").serializeArray());
      //console.log(formData);

      $.ajax({
      url: 'update.php',
      type: 'POST',
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      data:  formData,
      async: false,
      success: function(msg) {
          console.log(msg);
      }
});
        $('#myModal').modal('hide');
        $('#rn').css('display','none');
}
  });
});
  

</script>
<body>
  
  <nav class="navbar navbar-expand-sm navbar-inverse">
    <div class="container-fluid">


      <img class="logo"src="assets/images/logo1.png"/> 
      <a class="navbar-brand" href=""><?php echo $data['text_title']; ?></a>

      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="about.php"><?php echo $data['text_about'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="destination.php"><?php echo $data['text_destination'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php"><?php echo $data['text_blog'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $data['text_contact'] ?></a></li>
        <li class="nav-item"><a class="nav-link" id="rn" data-toggle="modal" data-target="#myModal" href="#"><?php echo $data['text_register'] ?></a></li>

        <!-- <li class="nav-item"><a class="nav-link" href="message.php">MESSAGES</a></li> -->
      </ul>
    </div>
  </nav>

<div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 710px;">

      <div class="item active" style="width: 100%; height: 100%;">
        <img src="assets/images/swiss.jpg" alt="Los Angeles" style='height: 100%; width: 100%; background-size: cover;'>
        <div class="carousel-caption">
          <div class="centered">
            <h1>Switzerland</h1>
            <a class="btn btn-default btn-lg visit"><?php echo $data['text_visit'] ?></a>
          </div>
        </div>
      </div>

      <div class="item" style="width: 100%; height: 100%;">
        <img src="assets/images/norway.jpg" alt="Chicago" style='height: 100%; width: 100%; background-size: contain;'>
        <div class="carousel-caption">
          <div class="centered">
            <h1>Norway</h1>
            <a class="btn btn-default btn-lg visit"><?php echo $data['text_visit'] ?></a>
          </div>
        </div>
      </div>
    
      <div class="item" style="width: 100%; height: 100%;">
        <img src="assets/images/finland.jpg" alt="New York" style='height: 100%; width: 100%; background-size: contain;'>
        <div class="carousel-caption">
          <div class="centered">
            <h1>Finland</h1>
            <a class="btn btn-default btn-lg visit"><?php echo $data['text_visit'] ?></a>
          </div>
        </div>
      </div>  
    </div> 

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="container txtHint">
                     
                     <form name='contact' id="contact" >
                      <!-- <div name="contact"> -->
                          <div class='form-group'>
                            <!-- <label>Name</label> -->
                      <img src="assets/images/logo1.png" style="width: 35%;">
                      <label style="display: block; padding-bottom:10px; color: white;">TRAVEL SEEKERS</label>
                            <input class='form-control' type="text" id='name' name='name' placeholder="Name">
                          </div>

                          <div class='form-group'>
                            <!-- <label>Phone Number</label> -->
                            <input class='form-control' type="text" name='phno' id='phno' placeholder="Mobile Number">
                          </div>

                          <div class='form-group'>
                            <!-- <label>Email ID</label> -->
                            <input class='form-control' type="text" name='email' id='email' placeholder="Email ID">
                          </div>


                         <!--  <div class='form-group'> -->
                            <!-- <label>AGE</label> -->
                           <!--  <input class='form-control' type="text" name='age' placeholder="Age">
                          </div> -->

                          <div class='form-group'>
                            <!-- <label>Gender</label> -->
                            <select class='form-control' name='gender' id='gender'>
                              <option>Destination</option>
                              <option value='Norway' >Norway</option>
                              <option value='Finland'>Finland</option>
                              <option value='Switzerland'>Switzerland</option>
                              <option value='Other'>Other</option>
                            </select>
                          </div>

                         <!--  <div class='form-group' style="color:white;">
                            <label>Gender : </label>
                            <input class='custom-control-input' type="radio" name='gender' value='male'>Male</input>
                            <input class='custom-control-input' type="radio" name='gender' value='female'>Female</input>
                            <input class='custom-control-input' type="radio" name='gender' value='other'>Other</input>
                          </div> -->

              <div class='form-group'>
                <button class='form-control btn btn-primary' id="sub" style="width:50%;">Register</button> 
              </div>            
                        
<!-- </div> -->
                        </form>
 

                </div>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- </div> -->
          </div>
      </div>
  </div>

</div>

</body>
</html>
