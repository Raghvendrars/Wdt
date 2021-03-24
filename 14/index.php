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

        .btn-primary {
            width: 20%;
            margin-left: 40%;

        }
        table {
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
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


    <table>
        <tr>
            <th>ID</th>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Item Purchased</th>
            <th>Mobile Number</th>
        </tr>

        <?php
        $l = "localhost";
        $r = "root";
        $p = "";
        $db = "studreg";

        $con = mysqli_connect($l, $r, $p, $db);

        $query = "SELECT * FROM customer";

        if ($result = $con->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $Cust_no = $row["Cust_no"];
                $Cust_name = $row["Cust_name"];
                $Item_purchased = $row["Item_purchased"];
                $Mob_no = $row["Mob_no"];

                echo '       
        
               <tr> 
                  <td>' . $id . '</td> 
                  <td>' . $Cust_no . '</td> 
                  <td>' . $Cust_name . '</td> 
                  <td>' . $Item_purchased . '</td> 
                  <td>' . $Mob_no . '</td> 
                  
              </tr>
              ';
            }
            $result->free();
        }
        ?>

    </table>

</body>

</html>
