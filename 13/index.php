<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Register</title>
    <style>
        form {
            width: 32%;
            border: 1px solid black;
            border-radius: 20px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }
        .btn-primary{
            width: 20%;
            margin-left: 40%;
            
        }
    </style>
</head>
<body>
    <form method="POST" action="./register.php">
        <h4 class="text-center text-primary mb-3">Registration Form</h4>
        <div class="input-group mb-3">
            <label class="input-group-text">Full Name</label>
            <input class="form-control" type="text" name="fullname">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text">Email</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
    </form>
</body>

</html>
