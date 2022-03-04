<?php include "post.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>todo</title>
</head>
<body>
    <form action="" method="post" >
       <h2>TODO LIST</h2>
       <h3>Add Item</h3>
       <input type="text" id="input" name="task" >
       <button type="submit" name="btn1" >Add</button>
       <button type="submit" name="btn2" onclick="update()" >Update</button>
    <div> 
        <h3>Todo</h3>
        <div id="todo"></div>
        <?php
           display();
        ?>
    </div>
    <div> 
        <h3>Completed</h3>
        <div id="completed"></div>
        <?php
           dis();
        ?>
    </div>
  </form>
<script>

</script>
</body>
</html>