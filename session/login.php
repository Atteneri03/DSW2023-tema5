<?php
session_start();

if(isset($_SESSION["user"])){
  $user = $_SESSION["user"];
} else {
  if(isset($_GET["name"])){
    $_SESSION["user"] = $_GET["name"];
    $user = $_GET["name"];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <?php
  if(isset($user)){
    echo "<h1>Hola $user</h1>";
    ?>
      <a href="logout.php">Cerrar sesión</a>
    <?php
  } else {
    ?>
    <h2>Bienbenido, ¿Como te llamas?</h2>
    <form action="login.php">
      <p>
        <input type="text" name="name" id="">
        <input type="submit" value="Enviar">
      </p>
    </form>
    <?php
  }
  ?>

</body>
</html>