<?php

/**
 * Caso de Estudio: Empresa XYZ tiene como objetivo
 * investigar la utilización del teléfono celular
 * en jóvenes entre 16 y 35 años al momento de
 * decidir en realizar la compra de un producto
 * por primera vez.
 * Se debe capturar:
 * 1) Edad
 * 2) correo electronico opcional
 * 3) Género
 * 4) Tiene telefono inteligente
 * 5) Gama de teléfono inteligente (baja, media,
 *    media alta, alta, ultra alta)
 * 6) Hay realizado alguna compra de un producto
 *    completamente nuevo
 * 7) Utilizo el apoyo de su telefono para decidir
 *    sobre ese producto?
 * 8) Puede determinar el nivel de influencia que tuvo
 *     sobre el producto la información obtenida
 *      utilizando su telefono movil?
 *     (ninguna, baja, media, alta, totalmente)
 * 9) Usaría nuevamente su telefono movil nuevamente
 *      para compara otro producto completamente nuevo?
 *      (no, muy poco probable, posiblemente, muy probable,
 *        definitivamente)
 * 
 */
//importar las funciones declaradas en 07_libreria.php
require_once '07_libreria.php';
//require_once '07_libreria.php';
// include '07_libreria.php';

//Inicializando Variables
$intEdad = 0;
$strEmail = '';
$intGenero = 1;
$intGamaTel = -1;
$bolCompraNuevo = true;
$bolUsoTelCompra = true;
$intInfluencia = 5;
$intUsariaTelNuevamente = 5;

$intProductoCod = 0;

$msg = '';

// Verificar si hay postback
if(isset($_POST["btnGuardarEncuesta"])){
  $intEdad = intval($_POST["intEdad"]);
  $strEmail = $_POST["strEmail"];
  $intGenero = intval($_POST["intGenero"]);
  $intGamaTel = intval($_POST["intGamaTel"]);
  $bolCompraNuevo = ($_POST["bolCompraNuevo"] === "1");
  $bolUsoTelCompra = ($_POST["bolUsoTelCompra"] === "1");
  $intInfluencia = intval($_POST["intInfluencia"]);
  $intUsariaTelNuevamente = intval($_POST["intUsariaTelNuevamente"]);

  $intProductoCod = intval($_POST["intProductoCod"]);

  $productoSeleccionado = obtenerDatosProducto($intProductoCod);
  $precio = $productoSeleccionado["precio"];
  $prdDsc = $productoSeleccionado["prdDsc"];
  $subtotal = $precio / 1.15;
  $iva = $precio - $subtotal;
  $strIvaProd = 'El producto: ' . $prdDsc . ' tiene un valor de ' . $subtotal. ' mas impuesto: '. $iva . ' dando un precio final de : '. $precio;
  //Procesar el nuevo estado segun el algoritmo
  // Crear un arreglo con los valores enviador
  $arrEncuesta = crearEncuesta(
      $intEdad,
      $strEmail,
      $intGenero,
      ($intGamaTel>=0),
      $intGamaTel,
      $bolCompraNuevo,
      $bolUsoTelCompra,
      $intInfluencia,
      $intUsariaTelNuevamente
  );
  //$msg = implode(", ", $arrEncuesta);
  if(addEncuestaToSession($arrEncuesta)){
      $msg = "
        <script>alert('Encuesta Agregada Satisfactoriamente. Gracias por su participación. ". $strIvaProd ." ');window.location.assign('07_formulario.php');</script>
      ";
  }
} //if isset btn

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta</title>
  <style>
    label {
      display: block;
    }
  </style>
</head>

<body>
  <h1>Encuesta de Uso de Celular</h1>
  <form action="07_formulario.php" method="post">
    <fieldset>
      <legend>Datos Generales</legend>
      <label>Edad:
        <input name="intEdad" type="number" min="0" max="150" value="<?php echo $intEdad; ?>" step="1">
      </label>
      <label>Correo Electrónico:
        <input name="strEmail" type="email" value="<?php echo $strEmail; ?>" placeholder="uncorre@electro.nico">
      </label>
      <label>Género:
        &nbsp;Femenino
        <input type="radio" value="2" name="intGenero" <?php echo ($intGenero === 2) ? "checked" : ""; ?> />
        &nbsp;Masculino
        <input type="radio" value="1" name="intGenero" <?php echo ($intGenero === 1) ? "checked" : ""; ?> />
      </label>
    </fieldset>
    <fieldset>
      <label>¿Qué gama de teléfono posee?:
        <?php
        $arregloGamas = getGamaTelefonoFromCodigo(0, true);
        $arregloGamas[] = array("code" => "-1", "value" => "No tengo Teléfono");
        echo getComboFromArray(
          $arregloGamas,
          "code",
          "value",
          $intGamaTel,
          "intGamaTel"
        );
        ?>
      </label>
      <label>¿Hay realizado recientemente alguna adquisición de un producto completamente nuevo?
        &nbsp;No
        <input type="radio" value="0" name="bolCompraNuevo" <?php echo ($bolCompraNuevo === false) ? "checked" : ""; ?> />
        &nbsp;Si
        <input type="radio" value="1" name="bolCompraNuevo" <?php echo ($bolCompraNuevo === true) ? "checked" : ""; ?> />
      </label>
      <label>
        ¿Utilizó el apoyo de su teléfono para decidir sobre la adquisición del producto?
        &nbsp;No
        <input type="radio" value="0" name="bolUsoTelCompra" <?php echo ($bolUsoTelCompra === false) ? "checked" : ""; ?> />
        &nbsp;Si
        <input type="radio" value="1" name="bolUsoTelCompra" <?php echo ($bolUsoTelCompra === true) ? "checked" : ""; ?> />
      </label>
      <label>
        ¿Seleccione el nivel de influencia que la información obtenida de su telefono movil contribuyó con la adquisición del producto?
        <?php
        echo getComboFromArray(getInfluenciaCompraByCode(0, true), "code", "value", $intInfluencia, "intInfluencia");
        ?>
      </label>
      <label>
        ¿Usaría nuevamente su telefono movil nuevamente para compara otro producto completamente nuevo?
        <?php
        echo getComboFromArray(getUseTelAgainByCode(0, true), "code", "value", $intUsariaTelNuevamente, "intUsariaTelNuevamente");
        ?>
      </label>
    </fieldset>
    <fieldset>
      <label>Demo Productos
      <?php
          echo getComboFromArray(obtenerDatosProducto(0,true), "prdCod", array("prdDsc"," | ", "precio"), $intProductoCod, "intProductoCod" );
      ?>
      </label>
    </fieldset>
    <fieldset>
    <button type="submit" name="btnGuardarEncuesta">Enviar</button>
    </fieldset>
  </form>
  <?php
    if($msg!==''){
      echo '<div>'.$msg.'</div>';
    }
  ?>
</body>

</html>
