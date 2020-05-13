<?php
  session_start();
  $txtNombre="";
  if(isset($_SESSION["txtNombre"])){
    $txtNombre = $_SESSION["txtNombre"];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verificar Sesión </title>
  </head>
  <body>
    <h1><?php echo $txtNombre;?></h1>
  </body>
</html>
