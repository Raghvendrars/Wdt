<?php
include "config.php";

if (isset($_POST['submit'])) {

  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];


  $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";


  $result = $conn->query($sql);

  if ($result == TRUE) {
    header('Location: view.php');
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>

form{
  padding: 20px;
  border: 1px solid black;
  margin-top: 5%;
  margin-left: auto;
  margin-right: auto;
}
</style>

</head>

<body>
  <form action="" method="POST" class="w-50">
    <fieldset>
      <legend>Personal information:</legend>
      <div class="input-group mb-3">
        <lable class="input-group-text">First name</lable>
        <input class="form-control" type="text" name="firstname">
      </div>
      <div class="input-group mb-3">
        <lable class="input-group-text">Last name</lable>
        <input class="form-control" type="text" name="lastname">
      </div>
      <div class="input-group mb-3">
        <lable class="input-group-text">Email</lable>
        <input class="form-control" type="email" name="email">
      </div>
      <div class="input-group mb-3">
        <lable class="input-group-text">Password</lable>
        <input class="form-control" type="password" name="password">
      </div>
      
        <lable style="margin-right: 2%;" class="input-group-text mb-3">Gender</lable>
        
        <input type="radio" name="gender" value="Male">
        <label>Male</label>
        
        <input type="radio" name="gender" value="Female">
        <label>Female</label><br>
      
      <input type="submit" class="btn btn-primary btn-lg mt-3" name="submit" value="submit">
    </fieldset>
  </form>

</body>

</html>
