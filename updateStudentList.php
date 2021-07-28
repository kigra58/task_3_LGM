

<?php  

include '_dbconn.php';
error_reporting(0);

     $id=$_GET['id'];
     

if(isset($_POST['update'])){

    $idupdate=$_POST['idupdate'];
    $name=$_POST['name'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $batch=$_POST['batch'];
    $gender=$_POST['gender'];
    $father_name=$_POST['father_name'];

    $sql="UPDATE `student` SET `id` = '$idupdate', `name` = '$name', `father_name` = '$father_name',
         `gender` = '$gender', `dob` = '$dob', `branch` = '$branch', `batch` = '$batch', `contact` = '$contact',
         `address` = '$address' WHERE `student`.`id` = $idupdate;";

    $status=mysqli_query($conn,$sql);

    if($status){
       
        echo'

        <div class="alert alert-success alert-dismissible fade show" role="alert">

        <strong> Record Updated Successfully ! </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        ';
    }
    else{

        echo'

        <div class="alert alert-success alert-dismissible fade show" role="alert">

        <strong> Record did not Update Successfully ! </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        ';
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

  <title> Update Student List </title>
</head>
<body>

<!-- Add New Student  -->

<div class="container-fluid">
  <div class="container  p-2 shadow-lg ">
         <h2 class="text-center alert alert-dark"> Update Record </h2>
        

      <form action="/task3/updateStudentList.php" method="POST" >
      
      <?php  

           $id=$_GET['id'];

           $sql=" SELECT * FROM `student` WHERE id=$id ";
           $result=mysqli_query($conn,$sql);
           $data=mysqli_fetch_assoc($result);      


      ?>

        <div class="row ">
       
            <div class="col-md-6">
                <!-- Left Side  -->
                 <div class="container-md p-3 mt-3" id="login-container">
                  
                  
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Student ID</label>
                        <input type="text" class="form-control" value="<?php echo $data['id'] ; ?>"
                          name="idupdate" aria-describedby="emailHelp">
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?php echo $data['name'] ; ?>"
                          name="name">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Father Name</label>
                          <input type="text" class="form-control" value="<?php echo $data['father_name'] ; ?>"
                            name="father_name">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Gender</label>
                          <input type="text" class="form-control" value="<?php echo $data['gender'] ; ?>"
                            name="gender">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Date Of Birth</label>
                          <input type="text" class="form-control" placeholder="" 
                          value="<?php echo $data['dob'] ; ?>"      name="dob">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Course</label>
                          <input type="text" class="form-control" value="<?php echo $data['course'] ; ?>"
                            name="course">
                      </div>

                      
                      
                  
  
                 </div>

            </div>


            <div class="col-md-6">
             <!-- Right Side  -->
              <div class="container-md p-3 mt-3" id="login-container">
                    
                      
                        
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Branch</label>
                          <input type="text" class="form-control" value="<?php echo $data['branch'] ; ?>"
                           name="branch">
                        </div>

                       

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Batch</label>
                          <input type="text" class="form-control" value="<?php echo $data['batch'] ; ?>"
                           name="batch"  >
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Contact</label>
                          <input type="text" class="form-control" value="<?php echo $data['contact'] ; ?>"
                           name="contact">
                        </div>

                        <div class="mb-3">

                          <label for="exampleInputEmail1" class="form-label">Address</label>
                          <textarea rows="5" type="text" class="form-control" 
                           value="<?php echo $data['address'] ; ?>" name="address" aria-describedby="emailHelp" >
                          </textarea> 
                          
                        </div>
                        
                        
                   
  
              </div>

            </div>
        
        </div>

        <div class="container text-center p-3">
              <button type="submit" name="update" class="btn btn-outline-success btn-lg mx-4 ">update</button>
              <a href="/task3/listStudent.php " type="submit" class="btn btn-dark btn-lg  ">Back</a>
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
