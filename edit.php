<?php 
  include 'db.php';
  $id = $_GET['ID'];
  $edit_task = mysqli_query($conn, "SELECT * FROM todos WHERE id = $id");
  $data = mysqli_fetch_assoc($edit_task);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Todo app</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="banner"></div>
    <div class="app-container">
      <div id="add-task">
        <form action="edit_2.php" method="POST">
          <input type="text" name="task" value ="<?php echo $data['taskname']?>"/>
          <button type="submit" name="submit" id="add">Edit</button>
          <input type="hidden" name = "id" value ="<?php echo $data['id']?>"/>
        </form>
        </div>  
    </div>  
  </body>
</html>
