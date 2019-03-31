<?php
     include ('db_conn.php');
     
	 $filename=$_FILES["usr-photo"] ["name"];
	$tempname=$_FILES["usr-photo"] ["tmp_name"];
	$folder="img/".$filename;
	echo $folder;
	 move_uploaded_file($tempname,$folder);
    echo  "<img src= '$folder' height='100'/>";
     
    $qry="SELECT * from tbl_std_reg ;"
    $result=mysqli_query($conn,$qry);
    
?>
<html>
<body>
	<img src="" height="">
</body>
</html>



