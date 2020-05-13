<?php

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Obtener Datos del Usuario con PHP</title>
</head>

<body>
  <form action="03_form_base.php" method="post">
    <fieldset>
      <legend>Datos Generales</legend>
      <label for="txtNombre">Nombre:</label>
      <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre Completo" />
      <br />
      <label for="txtEmail">Email:</label>
      <input type="emailcode ." name="txtEmail" id="txtEmail" placeholder="Email" />
      <br />
    </fieldset>
    <fieldset>
      <button type="submit" name="btnEnviar">Enviar</button>
      <button type="submit" name="btnSaludar">Saludar</button>
    </fieldset>
  </form>
</body>

</html>
