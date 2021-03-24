<?php

    $l="localhost";
    $r="root";
    $p="";
    $db="studreg";

    $con=mysqli_connect($l,$r,$p,$db);

    if ($con) {
        echo "Suc";
    }

    $Cust_no=$_POST['cust_num'];
    $Cust_name=$_POST['cust_name'];
    $Item_purchased=$_POST['item_pur'];
    $Mob_no=$_POST['mbl_num'];

    $sql="INSERT INTO customer (Cust_no,Cust_name,Item_purchased,Mob_no) values ('$Cust_no','$Cust_name','$Item_purchased','$Mob_no')";

    if ($con->query($sql) === TRUE) {
        header('Location: display.php');
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }  
      $con->close();
    
?>
