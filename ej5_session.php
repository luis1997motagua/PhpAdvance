<?php
  session_start();
  $nombres = array();
  if(isset($_SESSION["nombres"])){
    $nombres = $_SESSION["nombres"];
  }
  $txtNombre = "";

  if(isset($_POST["btnEnviar"])){
    $txtNombre = $_POST["txtNombre"];
    $nombres[] = $txtNombre;
    $_SESSION["nombres"] = $nombres;
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Sessión</title>
  </head>
  <body>
    <form method="post" action="ej5_session.php">
      <label>Nombre</label>
      <input type="text" value="<?php echo $txtNombre;?>"
          placeholder="Nombre Completo" name="txtNombre"
          id="txtNombre" /><br />
      <input type="submit" value="Enviar" name="btnEnviar" />
    </form>
    <div><ul>
      <?php
          foreach($nombres as $nom){
            echo '<li>'.$nom.'</li>';
          }
      ?>
    </ul></div>
  </body>
</html>
