<?php
    include "db.php";
    $newtask = $_POST['newtask'];
    $addtask = "INSERT INTO todos (taskname) VALUES ('$newtask')";
    $result = mysqli_query($conn, $addtask);
    header("location:index.php");
  if(!$result) {
    die ('Insert query failed');
  }
    
?>