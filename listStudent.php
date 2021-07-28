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

    <title> List of Student </title>
  </head>
  <body>

<!-- Student List  -->
<div class="container-fluid">
<h2 class="text-center p-3 alert alert-dark"> Student Record </h2>
    <div class="container text-center p-5 shadow-lg">
      
            
        <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Gender</th>
                <th scope="col">D.O.B</th>
                <th scope="col">Course</th>
                <th scope="col">Branch</th>
                <th scope="col">Batch</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>

    <?php 
       
      include '_dbconn.php';

      $sql=" SELECT * FROM `student` ";

      $status=mysqli_query($conn,$sql);
      
      while($data=mysqli_fetch_assoc($status)){
    
    ?>

              <tr>
                <th scope="row"><?php echo $data['id'] ?>  </th>
                <td> <?php echo $data['name'] ?>           </td>
                <td> <?php echo $data['father_name'] ?>    </td>
                <td> <?php echo $data['gender'] ?>         </td>
                <td> <?php echo $data['dob'] ?>            </td>
                <td> <?php echo $data['course'] ?>         </td>
                <td> <?php echo $data['branch'] ?>         </td>
                <td> <?php echo $data['batch'] ?>          </td>
                <td> <?php echo $data['contact'] ?>        </td>
                <td> <?php echo $data['address'] ?>        </td>
                <td><a href="/task3/updateStudentList.php?id=<?php echo $data['id'] ?>" > 
                      <i class=" btn  bi bi-pencil-square fs-4 "></i></a>
                    <a  href="/task3/deleteStudentRecord.php?id=<?php echo $data['id'] ?>"> 
                      <i class=" btn  bi bi-trash-fill  fs-4 "></i></a>
                </td>
              </tr>
     <?php
      }
     
     ?>         
              
            </tbody>
          </table>

    </div>


   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

