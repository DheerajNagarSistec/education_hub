<?php 
     session_start();
        include ('db_conn.php');
     $eml = $_POST['admin-eml'];
     $pswd = $_POST['admin-pswd'];
     
     $query="SELECT * FROM tbl_admin WHERE admin_eml='$eml' && admin_pass='$pswd'";
     $result=mysqli_query($conn,$query);
     $num=mysqli_num_rows($result);
     if ($num==1) 
       {
     	$_SESSION['frm-eml']=$usr_eml;
     	header('location:http://localhost/projects/showdata.php');
       }
     else
     {
     	header('location:http://localhost/projects/admin-frm.php');
     }
     echo "validation form";


 ?>