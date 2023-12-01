<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 2</title>
</head>
<body>
  <h1>Página 2</h1>
  <?php
  if(isset($_SESSION["level"])){
    ?>
      <h2>Contenido visto solo por usuarios registrados</h2>
    <?php
  } else {
    echo "<p>Esto se ve porque no tienes permisos</p>";
  }
  ?>
  <p>Esto es común para todos</p>
</body>
</html>