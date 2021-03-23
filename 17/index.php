<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit" value="Upload" name="upload">
    </form>
</body>

</html>
<?php
if (@$_POST['upload']) {
    $errors = "";
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = @strtolower(end(explode('.', $_FILES['file']['name'])));
    $dir = "uploads/";

    if (empty($errors) == true) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        move_uploaded_file($file_tmp, $dir . '/' . $file_name);
        echo "<script>alert('Data Updated successfully');</script>";
    } else {
        echo  $errors;
    }

}
?>
