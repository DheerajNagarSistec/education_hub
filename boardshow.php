 <?php 

    $conn = mysqli_connect('localhost','root','','ehub');

     function showdata()
       {
         global $conn;
         global $data;
        $query="select * from tbl_board";
        $run= mysqli_query($conn,$query);

         if ($run == TRUE) 
            { 
             
        
             while($data= mysqli_fetch_assoc($run)) 
               {
                

                ?>


                 
                              <select class="form-control">
                                <option> <?php echo $data['board_name'];?></option>
                 
                              </select>
                       </div> 
                       </div>      
                    </form>
            
            <?php  showdata();       
                               

            }
       
        } 
    
        
            else{
           echo "error !";
            }
       }
       

     ?>
     <!DOCTYPE html>
     <html>
     <head>
         <title></title>
         <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </head>
     <body>
        

<center><h1><input type="button" name="" value="start test" 
              data-toggle ="tab" href ="#sel"></h1></center>
     <form method="post" action="test-home.php">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
         <div class="tab-pane fade" id="sel">
             <select class="form-control">

                 <option> </option>
                   
                 
              </select>
         </div> 
        </div>      
    </form>

     </body>
     </html>