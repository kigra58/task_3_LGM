
<?php  

  include '_dbconn.php';

  if(isset($_POST['insert'])){
  
      $id=$_POST['id'];
      $name=$_POST['name'];
      $course=$_POST['course'];
      $branch=$_POST['branch'];
      $dob=$_POST['dob'];
      $contact=$_POST['contact'];
      $address=$_POST['address'];
      $batch=$_POST['batch'];
      $gender=$_POST['gender'];
      $father_name=$_POST['father_name'];

      $sql="INSERT INTO `student` (`id`, `name`, `father_name`, `gender`, `dob`, `course`, `branch`, `batch`, `contact`, `address`)
             VALUES ('$id', '$name', '$father_name', '$gender', '$dob', '$course', '$branch', '$batch', '$contact', '$address');";

      $status=mysqli_query($conn,$sql);

      if($status){
         echo" <script> alert('Inserrted Successfully !')
            </script>
       ";
      }
      else{

        echo" inserction not successfull ! ";
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

    <link rel="alternate" href="style.css" type="application/rss+xml" title="RSS">

    <title> ADD New Student </title>
  </head>
  <body>

 <!-- Add New Student  -->

<div class="container-fluid">
    <div class="container  p-2 shadow-lg ">
           <h2 class="text-center alert alert-dark">Student Registraton Form </h2>
        <form action="/task3/addStudent.php" method="POST" 
          <div class="row ">
         
              <div class="col-md-6">
                  <!-- Left Side  -->
                   <div class="container-md p-3 mt-3" id="login-container">
                    
                    
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Student ID</label>
                          <input type="text" class="form-control" name="id" aria-describedby="emailHelp" required>
                          
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Father Name</label>
                            <input type="text" class="form-control" name="father_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gender</label>
                            <input type="text" class="form-control" name="gender" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Date Of Birth</label>
                            <input type="text" class="form-control" placeholder="YYYY/MM/DD" name="dob" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Course</label>
                            <input type="text" class="form-control" name="course" required>
                        </div>

                        
                        
                    
    
                   </div>

              </div>


              <div class="col-md-6">
               <!-- Right Side  -->
                <div class="container-md p-3 mt-3" id="login-container">
                      
                        
                          
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Branch</label>
                            <input type="text" class="form-control" name="branch" required>
                          </div>

                         

                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Batch</label>
                            <input type="text" class="form-control" name="batch" placeholder="0000-0000"  required >
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="contact">
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <textarea rows="5" type="text" class="form-control" name="address"  required 
                               aria-describedby="emailHelp"></textarea>
                            
                          </div>
                          
                          
                     
    
                </div>

              </div>
          
          </div>

          <div class="container text-center p-3">
                <button type="submit" name="insert" class="btn btn-outline-success btn-lg mx-4 ">Register</button>
                <button type="submit" class="btn btn-dark btn-lg  ">Cancel</button>
          </div>
       </form>
     </div>
 </div>





   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
