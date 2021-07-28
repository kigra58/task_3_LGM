<?php  

$serverName="localhost";

$userName="root";

$password="";

$database="college";

// Create a connection
$conn=mysqli_connect($serverName,$userName,$password,$database);

// Die if coonecton was not successfull

if(!$conn){
    die("failled the connection");
}
else{
   // echo" connection successfully <br> ";
}


?>