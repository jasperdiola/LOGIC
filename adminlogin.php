<?php
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(isset($_SESSION['SESS_USER_ID'])) {
  header("location: libsys/home.php");
  exit();
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <title>Samson Online Library Management</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/homePageCustom.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
        <style>
            body{
                    color: #001f4d;
                  
        
                }
        </style>
        
  </head>
    
   <!-- Start of code here!!-->
  <body> 
   
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid" style="background-color: #001f4d;">
        <a href="index.php" class="navbar-brand"><div style="float: left;"><img height="35px"src="./img/samsonlogo.jpg" alt="" style="margin-top: -10px;margin-right: 5px;margin-left: 8px;"> Samson Online Library Management</div></a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>    
        </button>
          <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php" style="">Home</a></li>
              <li><a href="about.php" style="">About</a></li>
              <li><a href="libsys/search/index.php">OPAC</a></li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Log In<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="adminlogin.php">Admin</a></li>
                  <li><a href="userlogin.php">User</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="https://twitter.com/samsoncollege">Twitter</a></li>
                        <li><a href="https://www.facebook.com/SAMSON-COLLEGE-115806871772794/">Facebook</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container" align="center">
        <img src="img/samsonheader.png" height="150px" width="1000px" style="border-radius: 3px;">

      
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
                        
                        
                          
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                        
                        <div class="item active">
              <img src="img/samsoncourse1.png" alt="samsoncourse1" width="1000px" height="200px" style="border-radius: 3px;">
            </div>
                          
                        <div class="item">
                    <img src="img/samsoncourse2.png" alt="samsoncourse2" width="1000px" height="200px" style="border-radius: 3px;">
            </div>
                          
                        <div class="item">
              <img src="img/samsoncourse3.jpg" alt="samsoncourse3" width="1000px" height="200px" style="border-radius: 3px;">
            </div>
                          
            <div class="item">
              <img src="img/samsoncourse4.jpg" alt="samsoncourse4" width="1000px" height="200px" style="border-radius: 3px;">
            </div>
                          
            <div class="item">
              <img src="img/samsoncourse5.jpg" alt="samsoncourse5" width="1000px" height="200px" style="border-radius: 3px;">
            </div>

            <div class="item">
              <img src="img/samsoncourse6.jpg" alt="samsoncourse6" width="1000px" height="200px" style="border-radius: 3px;">
            </div>

            <div class="item">
              <img src="img/samsoncourse7.jpg" alt="samsoncourse7" width="1000px" height="200px" style="border-radius: 3px;">
            </div>
            </div>

             <div class="well-md-3">
                  <p></p>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>

                    <div align="center">
                    <img src="libsys/img/history1.gif" alt="history" width="200px" height="200px" style="border-radius: 3px;">
      <!--output here-->

      <div class="well-md-3" >
                  <p></p><br><br>
     
      </div>
            </div>
      </div>
      <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid" style="background-color: #001f4d;">
        <p class="navbar-text pull-left">&copy 2017</p>
        <a href="" class="navbar-btn btn-primary btn pull-right">Email us!</a>
        </div>
      </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
  </body>
</html>