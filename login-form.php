<?php 
    
   session_start();
   include ('db_conn.php');
        
     $usr_eml = $_POST['frm-eml'];
     $pswd = $_POST['frm-pswd'];
     
     
     $query="SELECT * FROM tbl_std_reg WHERE std_email='$usr_eml' AND std_pass='$pswd'";
     $result=mysqli_query($conn,$query);
     $num=mysqli_num_rows($result);
     if ($num == 1) 
       {
     	$_SESSION['frm-eml']=$usr_eml;
     	header('location:http://localhost/projects/home-page.php');
       }
     else
     {
     	header('location:http://localhost/projects/login-form.html');
     }


 ?>