<?php
    include 'db.php';
    $id = $_GET['ID'];
    $complete_task=mysqli_query($conn, "UPDATE todos SET `status`= 1 WHERE id=" .$id);
    header("location:index.php");
    if (!$complete_task) {
    die("Complete query failed");
    }

?>  