<?php
// include 'ejemplo_2_lib.php';
//include_once 'ejemplo_2_lib.php';
//require 'ejemplo_2_lib.php';
require_once 'ejemplo_2_lib.php';

// Inicializar Variables
$txtTextoLargo = "";
$result = false;
$arregloDePalabras = array();

if( isset($_POST["btnAnalizar"]) ) {

// 1) Verificar si hay un texto y se hizo
// click en el boton btnAnalizar
 $txtTextoLargo = $_POST["txtTextoLargo"];


// 1.5 Tarea, eliminar signos de puntuación y
//  articulos, convertir el texto completo en
// minusculas

// 2) Convertir el texto en un arreglo de palabras
$arregloDePalabras = obtenerArreglo($txtTextoLargo);
//  3) Generar un arreglo de frecuencias de palabras
$arregloFrecuencias = obtenerFrecuencias($arregloDePalabras);
//  4) Mostrar la palabra que mas se repite en el texto
//sort($arregloFrecuencias); // Ordena pero pierde llaves
// rsort($arregloFrecuencias); // rsort reverse sort pero pierde llaves
//asort($arregloFrecuencias);
arsort($arregloFrecuencias);
$result = true;
} // end if isset btnAnalizar
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Analizador de Textos</title>
  </head>
  <body>
    <h1>Analizador de Textos v1</h1>
    <form action="ejemplo_2_require.php" method="post">
      <label for="txtTextoLargo">Escriba el contenido de un Artículo</label>
      <br />
      <textarea id="txtTextoLargo" name="txtTextoLargo"
        placeholder="Escibra el texto de un artículo"><?php echo $txtTextoLargo; ?></textarea>
        <br />
        <button type="submit" name="btnAnalizar">Analizar</button>
    </form>
    <?php
      if($result) {
        ?>
          <div>
              <?php
              //  print_r($arregloDePalabras);
              //  echo '<br />';
              // print_r($arregloFrecuencias);
              foreach($arregloFrecuencias as $palabra => $freq) {
                echo '<b>'.$palabra.'</b> : '.$freq;
                break;
              }
              ?>
          </div>
        <?php
      } // if result
    ?>
  </body>
</html>
