<?php

session_start();
require 'connection.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  

  $result = mysqli_query($conn, "SELECT * FROM register WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
 
}
else{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>WELCOME</h1>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="logout.php">Logout</a>
    
  </body>
</html>
