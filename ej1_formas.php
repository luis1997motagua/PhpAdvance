<?php
    $numero1 = 0;
    $numero2 = 1;
    $modo = "";
    $result = "";
      // para obtener los valores que vienen
      // por método post, PHP nos ofrece un
      // arreglo especial donde vienen serializadas
      // todos los inputs con sus nombres
      // donde la llave es el name del input
      // y el valor es el value del input.

      // Para lograr determinar cuando la peticion http
      // al script PHP es por método POST
      if( isset($_POST["btnSumar"])){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $modo = " de sumar ";
        $result = ($numero1 + $numero2);
      }

      if( isset($_POST["btnRestar"])){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $modo = " de restar ";
        $result = ($numero1 - $numero2);
      }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Formulario en PHP</title>
  </head>
  <body>
    <h1>Ejemplo de Formulario</h1>
    <form method="post" action="ej1_formas.php">
      <label for="numero1">Número 1</label>
      <input type="number" name="numero1" id="numero1"
        placeholder="Número entre 0 y 100"
        min="0" max="100" value="<?php echo $numero1; ?>"/>
        <br />
        <label for="numero2">Número 2</label>
        <input type="number" name="numero2" id="numero2"
          placeholder="Número entre 0 y 100"
          min="0" max="100" value="<?php echo $numero2; ?>"/>
          <br />
          <button type="submit" value="process"
          name="btnSumar" id="btnSumar">Sumar</button>
          &nbsp;
          <button type="submit" value="process"
          name="btnRestar" id="btnRestar">Restar</button>
    </form>
    <?php
      if( $result !== "" ) {
    ?>
    <div style="border-radius:5px; box-shadow:3px 3px 3px #888; padding:1em;">
      <?php echo "El resultado " . $modo .
                $numero1 . " y " . $numero2 .
                " es igual a " . $result; ?>
    </div>
  <?php
      } //endif $result !== ""
   ?>
  </body>
</html>
