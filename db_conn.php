<?php
    
      static $usrname = "root";
      static $pass  = "";
      static $db = "ehub";


      $conn = mysqli_connect('localhost:3306',$usrname,$pass,$db);
                       // if connection was not succesfully , handle  the error  
       if ($conn==false) 
           {
      
                        // handle error  -- notify adminnstrator ,log a fill error screen etc.

       	       return mysqli_connect_error();
            }
?>