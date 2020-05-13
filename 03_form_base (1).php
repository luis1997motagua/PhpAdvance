<?php

  $txtNombre = '';
  $txtEmail = '';
  $txtResultado = '';
  // PHP " $txtEmail "  magic quotes
  // is -> esta 
  // set -> asignada (establecida) (provisionada) 
if ( isset($_POST["btnEnviar"])) {
  $txtNombre = $_POST["txtNombre"];
  $txtEmail = $_POST["txtEmail"];
  $txtResultado =  $_POST["txtNombre"];
}

if (isset($_POST["btnSaludar"])) {
  $txtNombre = $_POST["txtNombre"];
  $txtEmail = $_POST["txtEmail"];
  $txtResultado =  $_POST["txtEmail"];
}
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
      <input type="text" name="txtNombre" id="txtNombre"
       placeholder="Nombre Completo"
       value="<?php echo $txtNombre; ?>"
       />
      <br />
      <label for="txtEmail">Email:</label>
      <input type="emailcode ." name="txtEmail" id="txtEmail" 
      placeholder="Email" 
      value="<?php echo $txtEmail; ?>"
      />
      <br />
    </fieldset>
    <fieldset>
      <button type="submit" name="btnEnviar">Enviar</button>
      <button type="submit" name="btnSaludar">Saludar</button>
    </fieldset>
  </form>
  <hr/>
  <div>
      <?php
        echo $txtResultado;
      ?>
  </div>
</body>
</html>
