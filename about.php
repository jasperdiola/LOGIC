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

            <div class="well-md-3" >
                  <p></p>
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

             <div align="justify">
                    <br>
      
      <img src="libsys/img/history1.gif" alt="history" width="200px" height="200px" style="border-radius: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It was in the year 1934 that Attorney Enrique Del Pilar Samson and Mrs. Angeles Topacio Samson, an instructor from the National Teachers College founded the school, initially named State Fashion School in a small room at No. 25 Potenciana St. Intramuros Manila. <br>
 

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beginning with only one enrollee, her former student from the NTC, Mrs. Samson taught dressmaking. After only five months of operation, the couple moved to a rented apartment in Rizal Avenue to ac commodate the increasing number of enrollees, numbering about four hundred.<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soon after, a new branch was opened in Baguio City. This was followed by two more branches in Baliwag Bulacan and Escolta immediately after the 2nd World War. It was in the year 1950 that Atty. Samson decided to organize the Samson Automotive and Trade School to address the need for skilled industrial workers.<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Due to a big fire that razed the building in Escolta in 1951, the school together with all the students from the branches were eventually transferred to the Ortigas building at 2128 Legarda St. which is presently the Main building of the school.<br>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In 1960 the technical courses were offered in a leased building in Claro M. Recto Avenue. Immediately after, in the year 1961, the school was registered with the Securities and Exchange Commission under the corporate name Samson Institute of Technology Inc., where Mrs. Angeles T. Samson stood as both President and Treasurer. Through the years, due to the increasing number of students enrolling in the various courses offered by the school, the Samson administration expanded its operation in the following areas: Pasay City, Quezon Boulevard, España, Bataan and Bulacan. Howev er, in 1983, in compliance and in cooperation with the efforts of the former Ministry of Education, Culture and Sports to decongest the University Belt in Manila, the Samson Administration opened a branch at No. 587 Epifanio delos Santos Avenue, Cubao Que zon City. Eventually, all the other branches were given up in order to give full administrative concentration to the two owned schools located in Cubao and the other one in Legarda.<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With the demise of the founders, Atty. Enrique P. Samson and Mrs. Angeles T. Samson in April 1978 and October 1986 respectively, their youngest son Mr. Ferdinand T. Samson took charge of the school’s administration as President and Chairman of the Boar d from 1987 to the year 1994. Assisting him in the administrative functions was Mr. Gerald S. Aycardo as Executive Vice President and Treasurer. However, from the year 1994 to the present, Mr. Aycardo took over as both President and Chairman of the Board.<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In 1997, the Cubao campus inaugurated a five-storey building which houses the school’s state-of-the-art computer laboratories and library. And in June of 1998, SAMSON opened it’s latest branch in Alabang, which aims to cater to students residing south of Metro Manila.<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Aycardo’s biggest contribution by far is transforming the school from a vocational school to a college which offers both highly advanced vocational and technical education and computer-based degree programs as well. In 1998, Samson Institute of Technology has become Samson College of Science and Technology.<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On its 83rd year of dedicated service, Samson College of Science and Technology stands strongly on a solid and firm foundation, committed to providing the best technical-vocational and computer-based education to the Filipinos.<br><br> <a href="opac.php" class="navbar-btn btn-primary btn pull-right">Next...</a><br><br><br><br>
      
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