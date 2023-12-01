<?php
session_start();
if(isset($_SESSION["user"])){
  $user = $_SESSION["user"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <style>
    .alert{
      background-color: #ff9999;
      padding: 5px;
    }
  </style>
</head>
<body>
  <?php
  if(isset($_SESSION["message"])){
    echo " <div class = \"alert\">" .$_SESSION['message'] . "</div>";
    unset($_SESSION["message"]);
  }
  ?>
 
  <h1>Página de inicio</h1>
  <?php 
  if(isset($user)){
    echo "<h3>Usuario registrado: $user </h3>";
    echo "<p><a href='logout.php'>Logout</a>";
  } else {
    // echo "<a href='login.php'>Login</a>";
    require "login.php";
  }
  ?>
  <h2>Menú de usuario</h2>
  <ul> 
    <li><a href="page1.php">Página 1</a></li>
    <li><a href="page2.php">Página 2</a></li>
  </ul>
  <h2>Menú de admin</h2>
  <ul>
    <li><a href="admin1.php">Página 1</a></li>
  </ul>
</body>
</html>