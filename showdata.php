<?php     

    $conn = mysqli_connect('localhost','root','','ehub');

     function showdata()
       {
       	 global $conn;
       	$query="select * from tbl_std_reg";
       	$run= mysqli_query($conn,$query);

       	 if ($run == TRUE) 
       	    { 
       	 	   
       	 	   ?> <table border="1" align="center" width="80%">
       	 	       <tr>
       	 	       	  <th>NAME</th>
       	 	       	  <th>EMAIL ID</th>
                                <th>ADDRESS</th>
       	 	       </tr> 
       	 	   <?php 
       	 	   while($data= mysqli_fetch_assoc($run)) 
       	 	     {
       	 	     	?>
       	 	     	 <tr>
       	 	     	 	 <td><?php echo $data['std_name'];?></td>
       	 	     	 	 <td><?php echo $data['std_email'];?></td>
                               <td><?php echo $data['std_address'];?></td>
                               

                               <pre></pre>
       	 	     	     

       	 	     	 </tr>
       	 	     	 <?php

       	 	   
       	 	   
       	    }
       	?></table> <?php 
       	} 
            else{
       	 	 echo "error !";
            }
       }

?>
<!DOCTYPE html>
<html>
<head>
	<title>show data</title>
</head>
<body bgcolor="skyblue">
	<h1>THE ADMIN PANEL</h1>
      <?php showdata();?>

</body>
</html>

