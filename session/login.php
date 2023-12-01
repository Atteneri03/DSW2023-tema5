<?php
session_start();
if(isset($_GET["action"]) && $_GET["action"] == "clear-visits"){
  $_SESSION["visits"] = [];
}
if(isset($_SESSION["user"])){
  $user = $_SESSION["user"];
  $_SESSION["visits"][] = date("d-m-Y");
} else {
  if(isset($_GET["name"])){
    $_SESSION["user"] = $_GET["name"];
    $_SESSION["visits"][] = date("d-m-Y");
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
    foreach ($_SESSION["visits"] as $date) {
      echo $date . "<br>";
    }
    // var_dump($_SESSION["visits"]);
  
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
  <p>
    <a href="login.php">Actualizar la página</a>
  </p>
  <p>
    <a href="logout.php">Cerrar Sesión</a>
  </p>
  <p>
    <a href="login.php?action=clear-visits">Eliminar visitas</a>
  </p>

</body>
</html>