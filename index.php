<?php 

include '_dbconn.php';

  if(isset($_POST['loginBtn'])){

   
        $college_id=$_POST['college_id'];
        $password=$_POST['password'];
    
 
        $sql=" SELECT *FROM `login` WHERE `college_id`='$college_id' AND `password`='$password'; ";
      
        $status=mysqli_query($conn,$sql);

        $num=mysqli_num_rows($status);

        if($num>0){
          echo "<script> alert('login succesfully') </script>";
          
          header("location:admin.php");

        }
        else{
          echo "<script> alert('invalid ID and password') </script>";
        }
       
  }



?>






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

    <title> Welcome To University  </title>
  </head>
<body>

 
    <!-- NavBar  -->

    
   <nav class="navbar navbar-expand-lg fixed-top  navbar-light bg-dark ">
    <div class="container " id="nav-container">
      <a class="navbar-brand text-white bi bi-command" href=""><b>University</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto ">
          
          <a class="nav-link  text-white bi bi-person-fill fs-1 " type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal"  href="#"></a>
          <!-- Button trigger modal -->
        </div>
      </div>
    </div>
  </nav>
  

   




    
  <!-- Start  Carousel  -->
<div class="container-fluid"  >

 
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"    >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/univ3.jpeg" class="d-block w-100  img-fluid" alt="..." id="corousel-image"   >
          <div class="carousel-caption d-none d-md-block mb-5 ">
            <h5>  One page promising fill all your needs !</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, 
              alias fuga? Repellat tenetur aliquid quo voluptatum qui quasi, nesciunt exercitationem.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/univ1.jpg" class="d-block w-100  img-fluid" alt="..." id="corousel-image"   >
          <div class="carousel-caption d-none d-md-block mb-5 ">
            <h5>  One page promising fill all your needs !</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, 
              alias fuga? Repellat tenetur aliquid quo voluptatum qui quasi, nesciunt exercitationem.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/univ2.jpg" class="d-block w-100  img-fluid" alt="..." id="corousel-image"  >
          <div class="carousel-caption d-none d-md-block mb-5 ">
            <h5>  One page promising fill all your needs !</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, 
              alias fuga? Repellat tenetur aliquid quo voluptatum qui quasi, nesciunt exercitationem.
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  
</div>
  
   <!-- End carousel -->


  
   <!-- welcome To Zippy  -->
  
  
<div class="container fluid ">
    <h2 class="p-5 text-center  "><b>About</b></h2>
  
    <div class="row p-3">
       <div class="col-sm-8">
  
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate earum quae nihil ipsam rerum ipsum et,
           doloremque aliquid rem facilis architecto debitis quos hic ut, ea quibusdam qui itaque reiciendis, 
           dolores fugiat commodi totam! Officiis quae, quos optio beatae est numquam sit rem delectus aperiam totam.
            Velit saepe ratione placeat modi obcaecati. Exercitationem nostrum doloremque at suscipit aspernatur assumenda in,
             asperiores pariatur ipsa ratione, explicabo illo, quibusdam rerum. 
             Tempore eveniet possimus molestias accusantium exercitationem, veritatis,
              molestiae distinctio natus saepe voluptas perferendis non quos repellat iure a neque ea.
               Aperiam quibusdam, ab saepe exercitationem doloribus earum atque at incidunt nisi cupiditate, quos sit, 
               totam iure autem eveniet laborum quia porro. 
               Commodi fugiat eius voluptas suscipit eos possimus necessitatibus explicabo et quisquam consequuntur expedita aut dolore laudantium qui nesciunt quod tempora,
                in voluptatibus quos! Enim, harum mollitia? Distinctio aliquid praesentium molestiae cupiditate dolorem voluptas,
                 exercitationem vitae repellat iste. Sed beatae aperiam modi! Modi, 
                 a qui consequuntur nemo rem velit itaque doloremque et hic odio,
                  
         </p>
  
       </div>
       <div class="col-sm-4">
         <!-- transparent umbreall Part -->
         <i class="bi bi-vector-pen p-5" id="pen-icon"></i>
         
       </div>
</div>
  
  
  


  <!-- Footer   -->

  <div class="container-fluid">
    <div class="  row">
        <div class="col-sm-6 ">
            <!-- Map Image  -->
            <img src="images/map.jpg " id="map_image" class="p-4" />

        </div>
        <div class="col-sm-6 ">
            <!-- contact  -->

            <div class="container ">

              <div class="col-sm-10 " >
            
               <h3 class=" alert  alert-dark my-5" >Contact</h3>
            
               <form>
            
                   <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label"> NAME </label>
                       <input type="text" class="form-control"  aria-describedby="name" placeholder="Enter Name">
                       <div  class="form-text"></div>
                   </div>
            
            
                   <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">EMAIL ADDRESS</label>
                     <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Email Address ">
                     <div  class="form-text">We'll never share your email with anyone else.</div>
                   </div>

                   <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> SUBJECT </label>
                      <input type="text" class="form-control"  aria-describedby="name" placeholder="subject">
                      <div  class="form-text"></div>
                   </div>
            
            
                   <div class="mb-3">
                       <label for="message" class="form-label">MESSAGE</label>
                       <textarea type="text" class="form-control" row="4"   aria-describedby="message" placeholder="Message"></textarea>
                       
                   </div>
            
                          
                   <button type="submit" class="btn btn-dark" style="width: 100px;"> Send </button>
                 </form>
            
              </div>
            
            </div>

        </div>
    </div>
     
    <div class="container text-center mt-5 p-1" id="container-contact">
        <div class="row">
            <div class="col-sm-4 text-center">
               <p><b> OFFICE ADDRESS  </b></p>
               <P>Civil lines</P>
               <P>Pragyagraj, Uttar Pradesh</P>
               <P>India</P>
            </div>
            <!-- Icons   -->
            <div class="col-sm-4 text-center">
              <p><b> FOLLOW US </b></p>

              <div class="row">
                  <div class="col-sm-4">
                    <i class="bi bi-github btn fs-3"  ></i> <br>
                    <i class="bi bi-facebook btn fs-3"  ></i>
                  </div>
                  <div class="col-sm-4">
                    <i class="bi bi-twitter btn fs-3"  ></i> <br>
                    <i class="bi bi-google btn fs-3"  ></i>
                  </div>
                  <div class="col-sm-4">
                    <i class="bi bi-linkedin btn fs-3"  ></i> <br>
                    <i class="bi bi-youtube btn fs-3"  ></i>
                  </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
               <p><b> CONTACT US </b></p>
               <P>+1234567890</P>
               <P>zippy@skype.com</P>
               <P>enquiry@zippy.com</P>
            </div>
        </div>
    </div>


</div>

 




  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

            <h4 class="  modal-title " id="exampleModalLabel">Student Panel</h4>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
               <!-- Login  -->
          <form action="/task3/index.php" method="POST">     
            <div class="container-md p-5  shadow-lg " >
                
                
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">College ID</label>
                      <input type="text" class="form-control"  aria-describedby="emailHelp" name="college_id" required>
                      
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" >
                    </div>
                                 
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-success bi bi-box-arrow-in-right " name="loginBtn" required>Login</button>
        </div>
        </form>
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