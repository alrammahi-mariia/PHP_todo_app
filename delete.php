<?php
    include 'db.php';
    $id = $_GET['ID'];
    $delete_task=mysqli_query($conn, "DELETE FROM todos WHERE id=$id");
    header("location:index.php");
    if (!$delete_task) {
    die("Delete query failed");
    }
?> 