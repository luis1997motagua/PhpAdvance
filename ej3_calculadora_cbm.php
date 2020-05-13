<?php

  require_once("lib_funciones.php");

  $intNum1 = 0;
  $intNum2 = 0;
  $cmbOperacion = "sum";
  $resultado = "";

  if(isset($_POST["btnEjecutar"])){
    $intNum1 = floatval($_POST["intNum1"]);
    $intNum2 = floatval($_POST["intNum2"]);
    $cmbOperacion = $_POST["cmbOperacion"];
    switch ($cmbOperacion) {
      case 'sum':
        $resultado = "La suma de ". $intNum1 . " y " . $intNum2 . " es igual a " . ($intNum1 + $intNum2);
        break;
      case 'dif':
        $resultado = "La resta de ". $intNum1 . " y " . $intNum2 . " es igual a " . ($intNum1 - $intNum2);
        break;
      case 'mult':
        $resultado = "La multiplicación de ". $intNum1 . " y " . $intNum2 . " es igual a " . ($intNum1 * $intNum2);
        break;
      case 'div':
        if($intNum2 == 0){
          $resultado = "La división entre cero no es válida";
        }else{
          $resultado = "La división de ". $intNum1 . " entre " . $intNum2 . " es igual a " . ($intNum1 / $intNum2);
        }
        break;
    }
  } //if(btnEjecutar)

  if(isset($_POST["btnFactorial"])){
    $intNum1 = floatval($_POST["intNum1"]);
    $intNum2 = floatval($_POST["intNum2"]);
    $cmbOperacion = $_POST["cmbOperacion"];
    $resultado = "Presionó Factorial el factorial de " . $intNum1 ." es de " . factorial($intNum1);
  } //if(btnFactorial)
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora Básica con 4 Operaciones</title>
  </head>
  <body>
    <h1>Calculadora Básica</h1>
    <form action="ej3_calculadora_cbm.php" method="post">
      <label>Número 1</label>
      <input type="number" value="<?php echo $intNum1; ?>" name="intNum1" id="intNum1" />
      <br />
      <label>Número 2</label>
      <input type="number" value="<?php echo $intNum2; ?>" name="intNum2" id="intNum2" />
      <br />
      <label>Operación a Realizar</label>
      <select name="cmbOperacion" id="cmbOperacion">
          <option value="sum" <?php echo ($cmbOperacion=="sum")?"selected":""; ?> >Sumar</option>
          <option value="dif" <?php echo ($cmbOperacion=="dif")?"selected":""; ?>>Restar</option>
          <option value="mult" <?php echo ($cmbOperacion=="mult")?"selected":""; ?>>Multiplicar</option>
          <option value="div" <?php echo ($cmbOperacion=="div")?"selected":""; ?>>Dividir</option>
      </select>
      <br/>
      <input type="submit" value="Ejecutar" name="btnEjecutar" id="btnEjecutar" />
      <input type="submit" value="Factorial" name="btnFactorial" id="btnFactorial" />
    </form>
    <div>
      <h2>Resultado</h2>
      <?php echo $resultado; ?>
    </div>
  </body>
</html>
