<?php
   session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<title>Bootstrap Example</title>
      <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style type="text/css">
        body, html{
     height: 100%;
  background-repeat: no-repeat;
    background-image:url(img/test1.jpg);
    background-repeat: repeat;

  font-family: 'Oxygen', sans-serif;
      background-size: cover;
        
}
#prof {
        border-radius: 150px;
      }
      
          
      </style>
</head>
    <body>
    	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">EducationHub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home-page.php">Home</a></li>
        
          
          
       
        <li><a href="#">Test</a></li>
        <li><a href="#">Back</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="jumbotron text-editor" style="background-color: skyblue" >

                

            <h1 style="color:darkblue" align="center">Student-Profile</h1>

            
              <?php
           include ('db_conn.php');

           
     
              $filename=$_FILES["usr-photo"] ["name"];
              $tempname=$_FILES["usr-photo"] ["tmp_name"];
              $folder="usr-image/".$filename;
  
             move_uploaded_file($tempname,$folder);
               echo  " <center> <img src='$folder' height='200'id ='prof'</center/>"

               
          ?>

          <form  action="" method="post" enctype="multipart/form-data" style="">
                 
                 <?php 

                 move_uploaded_file($tempname,$usr-image);
                 echo  " <center> <img src='$folder' height='200'id ='prof'</center/>"
                  ?>

                     <label style="color: red">Add Photo</label>
                 
                          <input type="file" name="usr-photo"  value="helllo" alt="Wrong" >
                          <input type="submit" value="submit">
                     
                  </form> 

      
        </div>

    
        
    </div>
    </div> 
           
          <center><form>
               <a href="#" class="btn btn-info" role="button" style="background-color: red">
                 Test Score</a>
                 <a href="#" class="btn btn-info" role="button" style="background-color: green">Edit profile</a>
                     <a href="#" class="btn btn-info" role="button" style="background-color: blue"
                     > </a> 
          </form></center> 
          
              
   
   


</body>
</html>





