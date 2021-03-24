<?php

$l="localhost";
$r="root";
$p="";
$db="studreg";

$con=mysqli_connect($l,$r,$p,$db);

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];

if ($con) {
    echo "Success";
}

$sql="INSERT INTO student (fullname,email,password) values('$fullname','$email','$password')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();


?>
