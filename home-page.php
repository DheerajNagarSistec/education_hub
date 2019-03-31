<?php
   session_start();
   if(!isset($_SESSION['frm-eml']))
   {
   	header('location:http://localhost/projects/login-form.html');}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home-page</title>


<link rel="stylesheet" type="text/css" href="dashboard.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>






#btn-more-info {
  font-size: 18px;
  color: #fff;
  padding: 12px 22px;
  background-color:red;
  border: 2px solid:#fff;
}
@media (max-width: 600px) {
  .carousal-caption {
    display: none;
  }
}


#btn-more-info:hover{
  background-color: white;
  color: black;
}

.carousel-inner{
  width:100%;
  max-height: 100% !important;
}

sup{
	color: red;
}
</style>
</head>
<body style="background-color: skyblue" style="background-image: url();">
	<p><h3>Hello! .....</h3><?php echo $_SESSION['frm-eml']; ?></p>
	<a href="logout.php"> logout</a>

	<body>

  <nav  class="navbar navbar-fixed-top">
          
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button style="background-color:white; border-color: black;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav menu__list">
            	<li><p><?php echo $_SESSION['frm-eml']; ?></p></li>
              <li><img src="images\logo.png" width="150px" height="55px" align="left" ></li>

            <li ><a class="active" href="#">Dashboard<span class="sr-only">(current)</span></a></li>

            <li ><a  href="test\home.php">Admission</a></li>
            <li ><a  href="#">Top Schools</a></li>
            <li ><a  href="#">School List</a></li>
            <li ><a  href="#">Feedback</a></li>
            <li><a href="logout.php"><button type="button" class="btn btn-default btn-sm" style="float:right; " ><span class="glyphicon glyphicon-log-out"></span> Logout </button></a></li>



            </ul>
          
          
          </div>
        </nav>

        
          <div class="row">
            <div class="col-sm-2">
           <div id="mySidenav" class="sidenav">
  
  
  <a href="#" id="projects">Test Score</a>
  <a href="#" id="contact">Contact</a>
  <a href="user-profile.php" id="about">Student Profile</a>
</div>
</div>



  <div class="col-sm-10">
  	<div class="row">
  		<div class="col-sm-8" style="padding-top: 38px;">
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 640px; height: 485px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images\1cbse.jpg" alt="Los Angeles" style="width: 640px; height: 485px;">
        <div class="carousel-caption">
        <h1>CAMPION</h1>
        <br>
        <button type="button" class="btn btn-default" id="btn-more-info">More information</button>
      </div>
      </div>

      <div class="item">
        <img src="images\2cbse.jpg" alt="Chicago" style="width: 640px; height: 485px;">
      <div class="carousel-caption">
        <h1>SAGAR PUBLIC SCHOOL</h1>
        <br>
        <button type="button" class="btn btn-default" id="btn-more-info">More information</button>
      </div>
      </div>
    
      <div class="item">
        <img src="images\3cbse.jpg" alt="New york" style="width: 640px; height: 485px; ">
      <div class="carousel-caption">
        <h1 >MAHARISHI VIDYA MANDIR</h1>
        <br>
        <button type="button" class="btn btn-default" id="btn-more-info">More information</button>
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
</div>
</div>

 <div class="col-sm-4" style="padding-top: 82px; padding-left:71px;">
   <div class="card" style=" height: 426px; width: 189px; ">
    
      
        <h4 style="text-align: center;"><u>Top Schools</u></h4><hr style="border-color: black;">
     <marquee direction="up" scrollamount="3" onmouseover="stop();" onmouseout="start();"><p><a href="#">Champion (cbse)<sup><u>TOP</u></sup></a></p>
        <p><a href="#">SAGAR PUBLIC SCHOOL<sup><u>TOP</u></sup></a></p>
        <p><a href="#">All Saints School<sup><u>TOP</u></sup></a></p>   
      
        <p><a href="#">BILLABONG HIGH INTERNATIONAL SCHOOL<sup><u>TOP</u></sup></a></p>
        <p><a href="#">Maharishi Vidya Mandir<sup><u>TOP</u></sup></a></p>
        <p><a href="#">Delhi Public School<sup><u>TOP</u></sup></a></p>
        <p><a href="#">Bal Bhawan School<sup><u>TOP</u></sup></a></p>
        <p><a href="#">Carmel Convent Girls Senior Sec School<sup><u>TOP</u></sup></a></p>
        <p><a href="#">World Way International School<sup><u>TOP</u></sup></a></p>
        <p><a href="#">Vindhyachal Academy<sup><u>TOP</u></sup></a></p>
        <p><a href="#">Orion International School<sup><u>TOP</u></sup></a></p></marquee>
  </div>
</div>
</div>
</div>


<div class="copyright-agile">
			<p>&copy; 2018 Education Hub. All rights reserved | Design by <a href="#">Owner of EDUCATION-HUB</a></p>
		</div>




</div>

</body>
</html>