<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Enviar correo</h1>
  <form action="send.php" method="post">
    <p>
      Destinatario: 
      <input type="text" name="to">
    </p>
    <p>
      Asunto:
      <input type="text" name="subject">
    </p>
    <p>
      Contenido:
      <textarea name="message" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
      <input type="submit" value="Enviar">
    </p>
  </form>
</body>
</html>