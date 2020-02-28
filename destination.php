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
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <style>
     h1{
    font-size: 25px;
    font-family: 'Montserrat', sans-serif;
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

  .search{
    height: 50px;
    width: 100%;
    border-radius: 30px;
    background-color: #0000009e;
    color: white;
    padding-left: 20;
    margin-bottom: 25px;
  }

  table{
    border-radius: 50px;
    background-color: #0000009e;
  }

  .table>tbody>tr>th {
        border-top: 0px solid black;
      }

      th{
          font-family: 'Montserrat', sans-serif;
        border-radius: 0px;
        margin-bottom: 0px;
      }
</style>

<script>
var app = angular.module('myApp', []);
app.controller('orderCtrl', function($scope) {
    $scope.query = {}
    $scope.queryBy = '$'
    $scope.orderProp="name";          
    $scope.customers = [
        {"name" : "norway" ,"city" : "Europe","price" : "5"},
        {"name" : "andaman", "city" : "India","price": "1"},
        {"name" : "macau", "city" : "China","price": "2"},
        {"name" : "lofoten Islands", "city" : "Europe","price": "5"},
        {"name" : "sweden", "city" : "Australia","price": "2"},
        {"name" : "bali", "city" : "Thailand","price": "2"},
        {"name" : "morissius", "city" : "Maldives","price": "1"}
    ];

    $scope.clic = function(name)
    {
      window.alert(name);
    };
});
app.filter('myFormat', function() {
    return function(x) {
        var i, c, txt = "";
        for (i = 0; i < x.length; i++) {
            c = x[i];
            if (i == 0) {
                c = c.toUpperCase();
            }
            txt += c;
        }
        return txt;
    };
});
app.directive('ngGuru',function(){
        return {

            link:function($scope,element,attrs) {
                element.bind('click',function () {
                    element.html('You clicked me');
                });}
        }});
</script>

</head>

<body style="background-image: url(assets/images/erebor.jpg); background-repeat:no-repeat;
    background-size:cover;">
    <nav class="navbar navbar-expand-sm navbar-inverse">
        <div class="container-fluid">
          <img class="logo"src="assets/images/logo1.png"/> 
          <a class="navbar-brand" href="http://localhost/advweb/project/index.php"><?php echo $data['text_title']; ?></a>

          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/about.php" ><?php echo $data['text_about'] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/destination.php" style="color: white;"><?php echo $data['text_destination'] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/blog.php"><?php echo $data['text_blog'] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/advweb/project/contact.php"><?php echo $data['text_contact'] ?></a></li>
          </ul>
        </div>
  </nav>

<div class="container" style="padding-top: 50px;" ng-app="myApp" ng-controller="orderCtrl">
  <div class=row>
    <div class="col-md-12">
      <input class="search" ng-model="query[queryBy]" placeholder="Search" />
      <table class = "table">
        <th><h1>Place</h1></th>
        <th><h1>Country</h1></th>
        <th><h1>Amount</h1></th>
        <tr ng-repeat="x in customers | orderBy : 'name' | filter:query">
          <td ng-click=clic(x.name)><h2>{{x.name | myFormat}}</h2></td>
          <td><h2>{{x.city}}</h2></td>
          <td><h2>{{x.price}}L</h2></td>
        </tr>
      </table>
    </div>

  </div>
</div>


</div>
</body>
