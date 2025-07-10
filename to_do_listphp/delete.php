<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "config.php";

    $id=$_GET['id'];
    $query = "delete from task_add where serial_notasks=$id";


    $result=mysqli_query($conn,$query);
 if ($result) {
        echo "<script>window.location.href='index.php'</script>";
    }





