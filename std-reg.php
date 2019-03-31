<?php
     include ('db_conn.php');
     $std_nm   = $_POST['std-nm'];
     $std_eml   = $_POST['std-eml'];

    
     
     $std_pswd = $_POST['std-pswd']; 
     $std_gender = $_POST['std-gender'];
     $year = $_POST['year'];
     $month = $_POST['month']; 
      $date = $_POST['date'];
     $std_dob  = $year.$month.$date;

      $std_add  = $_POST['std-add'];
     $std_dist = $_POST['std-dist'];
     $std_no =   $_POST['std-no'];

     $usr_check = "SELECT std_email from tbl_std_reg where std_email='$std_eml'";

     

     $count=0;
           $usr_chk_query = mysqli_query($conn,$usr_check);
           $count=mysqli_num_rows($usr_chk_query);

        if ($count==0) 
          {
                  $sql="INSERT INTO tbl_std_reg 
                       (std_name,std_email, std_pass,std_gender,std_DOB,std_address, 
                      std_dist, std_MOB)
                      VALUES ('$std_nm','$std_eml','$std_pswd','$std_gender',$std_dob      ,'$std_add','$std_dist' ,$std_no)";                                                                            
              

                  $query = mysqli_query($conn,$sql);
                    if ($query) {
                        echo ("Registration is successful");
                        echo ("Student name is ".$std_nm. "  password is ".$std_pswd);
                                }

          
          } 
          else 
             { echo  $std_eml."  is already exist in database";}



 
         
           
  ?>   