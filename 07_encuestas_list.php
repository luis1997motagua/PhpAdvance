<?php
require_once '07_libreria.php';
$arrEncuestas = array();
$arrEncuestas = getEncuestasDeSession();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuestas</title>
</head>

<body>
  <h1>Encuestas</h1>
  <table border="1">
    <thead>
      <tr>
        <th>#</th>
        <th>Edad</th>
        <th>Correo</th>
        <th>Gama de Telefono</th>
        <th>Compro Producto</th>
        <th>Uso Tel para Compra</th>
        <th>Nivel Influencia Compa</th>
        <th>Vuela a Usar Tel para Compra</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $counter = 1;
      foreach($arrEncuestas as $encuesta) {
      ?>
      <tr>
        <td><?php echo $counter; ?></td>
        <td><?php echo $encuesta["intEdad"]; ?></td>
        <td><?php echo $encuesta["strEmail"]; ?></td>
        <td><?php echo $encuesta["strGamaTel"]; ?></td>
        <td><?php echo ($encuesta["bolCompraNuevo"])?"Si":"No"; ?></td>
        <td><?php echo ($encuesta["bolUsoTelCompra"])?"Si":"No"; ?></td>
        <td><?php echo $encuesta["strInfluencia"]; ?></td>
        <td><?php echo $encuesta["strUsariaTelNuevamente"]; ?></td>
      </tr>
      <?php
          $counter ++;
        }
      //endforeach
      ?>
    </tbody>
  </table>
  <?php
   //print_r($arrEncuestas);
  ?>
</body>

</html>
