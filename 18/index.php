<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-size: 20px;
            margin: 0px auto;
            border-collapse: collapse;
        }

        td {
            padding: 20px;
        }

        thead {
            font-weight: bold;
        }
        form{
            width: 30%;
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <table border="1px">
        <thead>
            <td>Customer No</td>
            <td>Name</td>
            <td>Item Purchased</td>
            <td>Mobile Number</td>
        </thead>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "studreg");
        $query = "SELECT * FROM student;";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($query_run)) {

            echo '<tr>
            <td>' . $row["id"] . '</td>
            <td>' . $row["fullname"] . '</td>
            <td>' . $row["email"] . '</td>
            <td>' . $row["password"] . '</td>
            </tr>';
        }

        ?>
    </table>
    <form action="" method="post">
        <input type="submit" value="Export in Excel" name="exportexcel" style="width: 160px; height:60px; cursor:pointer;">
        <input type="submit" value="Export in MS Word" name="exportword" style="width: 160px; height:60px;cursor:pointer;">
    </form>
</body>

</html>
<?php
if (@$_POST['exportword']) {
    $vExcelFileName = "export" . ".doc"; //replace your file name from here.
    header("Content-type: application/x-ms-download"); //#-- build header to download the word file 
    header("Content-Disposition: attachment; filename=$vExcelFileName");
    header('Cache-Control: public');
}
if (@$_POST['exportexcel']) {
    $vExcelFileName = "export" . ".xls"; //replace your file name from here.
    header("Content-type: application/x-ms-excel"); //#-- build header to download the word file 
    header("Content-Disposition: attachment; filename=$vExcelFileName");
    header('Cache-Control: public');
}
?>
