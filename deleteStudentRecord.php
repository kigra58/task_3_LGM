<?php 
  
  include'_dbconn.php';
  
     
    $id=$_GET['id'];

    $sql=" DELETE FROM `student` WHERE id=$id ";

    $status=mysqli_query($conn,$sql);

    if($status){
    echo" <script> alert('Record Deleted !')
          </script>
    ";
    }
    else{

      echo" <script> alert('Deletion  not successfull !')
            </script>
     ";
    }

     header('location:listStudent.php');


  

?>