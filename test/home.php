<?php
include("users.php");

$profile=new users;

$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>test page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body style="background-color:skyblue">

        <div class="container">
           <h2>EHub Test</h2>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab1" href="#">Home</a>
              </li>
              <li><a data-toggle="tab" href="#menu1">Profile</a></li>
              <li><a data-toggle="tab" href="#menu2">Logout</a></li>
              <li><a href="#">Back</a></li>
             
            </ul>




  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>

	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="select" name="cat">
		  <option >select board</option>

		  <?php		  
		  foreach($profile->cat as $tbl_board)
		  {  ?>	

			<option value="<?php echo $tbl_board['board_id'];?>"><?php echo $tbl_board['board_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
	 
	  
	  </div>
	  </div>