<html>

<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
<body>

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
