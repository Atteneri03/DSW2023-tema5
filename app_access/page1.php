<?php
session_start();
if(!isset($_SESSION["level"])){
$_SESSION["message"] = "No tiene acceso a la página";
header("Location: index.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 1</title>
</head>
<body>
  <h1>Página 1</h1>
</body>
</html>