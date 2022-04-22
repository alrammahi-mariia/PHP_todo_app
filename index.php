<?php 
include 'db.php';


  // Selecting all tasks from the database to display added tasks  
  $query = "SELECT * FROM todos";
  $result2 = mysqli_query($conn, $query);
  if (!$result2) {
  die('Select all query failed');
  }
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
        <form action="add.php" method="POST">
          <input type="text" name="newtask" placeholder="Input a task here" />
          <button id="add">Add</button>
        </form>
        </div>  
      <div id="tasks">
        <?php 
		      while ($row = mysqli_fetch_assoc($result2)) { ?>
          <div class="task">
            <div class="<?php echo $row['status']?'completed':'';?>">
            <a href="check.php? ID=<?php echo $row['id'] ?>"><span class="material-icons">check_box</span></a>
            <?php echo $row['taskname']; ?>
          </div>
          <div class="buttons">
            <a href="edit.php? ID=<?php echo $row['id'] ?>"><span class="material-icons">edit</span></a>
            <a href="delete.php? ID=<?php echo $row['id'] ?>"><span class="material-icons">delete</span></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>  
  </body>
</html>
