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

          <div class="container border-5 rounded-2 p-3 " id="content_container" ></div>
                 <h2 class="text-center alert alert-dark"> Classes Schedule </h2>       
                           
                <!-- Content Section  -->
              <div class="container mt-5 p-4 shadow-lg">
                    
                                       
              <table class="table table-bordered table-hover   ">
                   <thead>
                     <tr>
                       <th scope="col">Date</th>
                       <th scope="col">Faculty Name</th>
                       <th scope="col">Subject</th>
                       <th scope="col">Class</th>
                
                     </tr>
                   </thead>
                   <tbody>


                <?php 
       
                   include '_dbconn.php';

                   $sql=" SELECT * FROM `classes` ";

                   $status=mysqli_query($conn,$sql);

                   while($data=mysqli_fetch_assoc($status)){

                ?> 

                     <tr>
                       <th scope="row"><?php echo $data['date'] ?></th>
                       <td><?php echo $data['name'] ?></td>
                       <td><?php echo $data['subject'] ?></td>
                       <td><?php echo $data['class'] ?></td>
                      </tr>            
                   </tbody>
     <?php  }?>         
              </table>

                    
                  </div>

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