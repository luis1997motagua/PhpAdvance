<?php
  session_start();
  // $_SESSION es un arreglo que contiene todo las variables
  // guardadas en sesión. Tambien se puede usar para guardar
  // la informacion en sesión.
  $txtNombre = "";
  if( isset($_POST["btnGuardar"]) ){
    $txtNombre = $_POST["txtNombre"];
    $_SESSION["txtNombre"] = $txtNombre;
  }

  if(isset($_SESSION["txtNombre"])){
    $txtNombre = $_SESSION["txtNombre"];
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Manejo de Sessiones</title>
  </head>
  <body>
    <form ation="ejemplo3_session_variables.php" method="post">
      <label for="txtNombre">Nombre de Ingreso</label>
      <input type="text" value="<?php echo $txtNombre; ?>"
        name="txtNombre" id="txtNombre" placeholder="Nombre Completo"
        />
        <br />
        <button type="submit" name="btnGuardar">Guardar</button>
    </form>
  </body>
</html>
