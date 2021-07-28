

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Icon   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- style CSS  -->
    <link rel="stylesheet" href="css.css">

    <title> College Management System </title>
  </head>
<body>

 
<!-- NavBar  -->
<?php     
include '_dbnavbarDash.php'; 
error_reporting(0);       
                  
?>
  
<!-- End Navbar  -->
   

<div class="container-fluid">

   <div class="row">
        <div class="col-lg-3">

               
          <!-- Side Nav        -->

         <?php 
                 
        include '_dbsideNav.php';   
         ?>

              
      </div>        

      

      <div class="col-lg-9">

            <div class="container border-5 rounded-2 p-3" id="content_container" ></div>
             <h2 class="text-center alert alert-dark "> Students Results </h2>  
             
              
                  
                    <div class="container-fluid p-4">
                        <form class="d-flex" method="POST" action="">
                           <input class="form-control me-2" name="searchBar" type="search" placeholder="Search  Roll No." aria-label="Search" required>
                           <button class="btn btn-outline-success" type="submit" name="searchBtn" >Search</button>
                        </form>


                        
                    </div>
                     
                    
                  
              
                           
                <!-- Content Section  -->
                    
          
            <?php 
       
                   include '_dbconn.php';

                   if(isset($_POST['searchBtn'])){

                   //echo $str=$_POST['searchBar'];
                   $str=mysqli_real_escape_string($conn, $_POST['searchBar']);
        
                   $sql=" SELECT * FROM `result` WHERE roll_no like '%$str%' "; 
         
                   $res=mysqli_query($conn,$sql);
    
                   if(mysqli_num_rows($res)>0){
             
                     while($row=mysqli_fetch_assoc($res)){
                
                         
            ?>   
                  
                    <div class="card p-5 shadow-lg " >
                        
                        <h3 class="alert alert-info">Roll No   :<?php    echo   $row['roll_no'];    ?> </h3>
                        <h3 class="alert alert-info">Name      :<?php    echo   $row['name'] ;     ?> </h3>
                        <h3 class="alert alert-info">Result    :<?php    echo   $row['passed'];     ?></h3>
                        <h3 class="alert alert-info">percentage:<?php    echo   $row['percentage']; ?>  %</h3>

                    </div>



            <?php
     
                      }

                  }
                  else{
                   "data not found";
                  }
        
                }

       
            ?> 

                   
           


            </div>
                           


          </div>

      </div>
   </div>
      
</div>  


   
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="js.js"></script>     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</boy>
</html>