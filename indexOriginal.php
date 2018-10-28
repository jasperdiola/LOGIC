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
                    background-image: url("img/BG3.jpg");
                    background-repeat: x-repeat;
                  
        
                }
        </style>
        
	</head>
    
    
  <body> 
   
      <div class="container">
        <center>
            
            <br/>
            <img src="img/samsonheader.png" height="190px" width="900px" style="border-radius: 3px;">
            <div class="well well-md">
                <a href="index.php"><button class="btn btn-default-1">Home</button></a>
                <a href="aboutNAMEI.html"><button class="btn btn-default-2">About Samson</button></a>
                <a href="campLoc.html"><button class="btn btn-default-3">Campus Location</button></a>
                <a href="libsys/search"><button class="btn btn-default-4">OPAC</button></a>
              
              
                
                
                <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Login
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" href="libsys/opac">User</a></li>
                        <li role="presentation"><a role="menuitem" href="libsys/admin.php">Administrator</a></li>
                      </ul>
                </div>
                
                
            </div>
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
						<li data-target="#myCarousel" data-slide-to="7"></li>
						<li data-target="#myCarousel" data-slide-to="8"></li>
                        
                        
                          
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
                        
                        <div class="item active">
				        <img src="img/ONE.png" alt="pic1" style="width: 900px;height: 280px; margin-left: -190px; margin-right: -190px;">
						</div>

						<div class="item">
				        <img src="img/TWO.PNG" alt="pic1" style="width: 900px;height: 280px; margin-left: -190px; margin-right: -190px;">
						</div>

						<div class="item">
						  <img src="img/THREE.PNG" alt="Chania" style="width: 900px;height: 280px; margin-left: -190px; margin-right: -190px;">
						</div>

						<div class="item">
						  <img src="img/FOUR.PNG" alt="Flower"  style="width: 900px;height: 280px; margin-left: -190px; margin-right: -190px;">
						</div>

						<div class="item">
						  <img src="img/samsoncourse1.png" alt="samsoncourse1">
						</div>
                          
                        <div class="item">
				            <img src="img/samsoncourse2.png" alt="samsoncourse2">
						</div>
                          
                        <div class="item">
						  <img src="img/samsoncourse3.jpg" alt="samsoncourse3">
						</div>
                          
						<div class="item">
						  <img src="img/samsoncourse4.jpg" alt="samsoncourse4">
						</div>
                          
						<div class="item">
						  <img src="img/samsoncourse5.jpg" alt="samsoncourse5">
						</div>

						<div class="item">
						  <img src="img/samsoncourse6.jpg" alt="samsoncourse6">
						</div>

						<div class="item">
						  <img src="img/samsoncourse7.jpg" alt="samsoncourse7">
						</div>
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
            
           <div class="well-md-3">
                  <p></p>
            </div>
               <img src="img/HEADER4.png" height="180px" width="900px" style="margin-top: -75px;padding-bottom: -60px; margin-bottom: -80px;">
            <div class="well-md-1">
                    <br>
                    <h3>Mission & Objectives</h3>
                    <p>At Samson College of Science and Technology we believe that each student should be given the opportunity to receive a high quality education for the career best suited to his or her aptitude, interest, ambition and ability. To this goal the administration and faculty have dedicated themselves.
					Among the objectives of Samson College of Science and Technology are the following:<br><br>
                    
                  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9679  To prepare the student to meet the diverse requirement that the career of his/her choice demands.<br>
                        
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9679  To improve the delivery system so as to meet in the most economical, efficient manner the needs of students and the economy.<br>
                        
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9679 To help the student develop the proper work habits, desirable attitudes and increase confidence.<br>

                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9679 To help uplift the quality of life through scholarship grants under the Doña Angeles Topacio Samson Scholarship Program.
                	</p>
            </div>
                  <div class="well-md-3">
                  <p></p>
                  </div>
                    <img src="img/HEADER5.jpg" height="85px" width="900px" style="margin-top: -30px;padding-bottom: -20px;">
                    
            
            <div class="well-md-4">
                <CENTER>
                <div class="row">
							<div class="col-sm-8">
								<img src="img/LOGO.png" height="100px" width="100px" style="margin-top: 5px; margin-bottom: 25px;" />
							</div>
							
							<div class="col-sm-5" style="margin-left:-200px; margin-top: 30px;">
								<p style="color: #fafafa; text-align: justify; font-size: 11px;font-weight: bold;">
								CUBAO<br>
								587 EDSA, Cubao, Quezon City<br>
								Tel. Nos. 721-41-29,414-64-29, 414-64-31<br>
								Fax No. 723-16-48<br>
								Copyright &copy; Samson College of Science and Technology<br>
								All rights reserved.
								</p>
							</div>
						</div>
                    </CENTER>
                
            </div>
            
   
        </center>
      </div>
      
      
      
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
  </body>
</html>