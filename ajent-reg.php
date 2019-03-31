<?php
     $std_nm   = $_POST['aj-nm'];
     $std_eml   = $_POST['aj-eml'];

     $std_usr_nm=$_POST['aj-usr-nm'];
     $std_add  = $_POST['aj-add'];
     $std_pswd = $_POST['aj-pswd']; 
     $std_pswd = $_POST['aj-gender']; 

     $std_dist = $_POST['aj-dist'];
     $std_no =   $_POST['aj-no'];

     $aj_pass_hash = ($aj_pass, PASSWORD_DEFAULT );

     $usr_check = "select ajent_eml from tbl_ajent_reg where ajent-eml='$aj_eml'";
     $count=0;
     $user_chk_query=mysqli_query($conn,$usr_check);
     $count=mysqli_num_rows($user_chk_query);
     if($count>0)
     {

     }
     else
     {
     	$usr_insert = "insert into ";
     }

  
       
  ?>   