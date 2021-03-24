<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>14 Pro</title>
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
    <form method="POST" action="register.php">
        <h2 class="text-center text-primary mb-3">Customer Registration</h2>
        <div class="input-group mb-3">
            <label class="input-group-text">Customer Number</label>
            <input class="form-control" type="text" name="cust_num">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text">Customer Name</label>
            <input class="form-control" type="text" name="cust_name">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text">Item Purchased</label>
            <input class="form-control" type="text" name="item_pur">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text">Mobile Number</label>
            <input class="form-control" type="text" name="mbl_num">
        </div>

        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
    </form>

</body>

</html>
