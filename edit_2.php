<?php
    include "db.php";   
    $new_task = $_POST['task'];
    $id = $_POST['id'];
    $update_task = mysqli_query($conn, "UPDATE todos SET taskname = '$new_task' WHERE id = $id");
    header("location:index.php");
    if (!$update_task) {
      die("Update query failed");
      }

?>