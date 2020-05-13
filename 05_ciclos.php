<?php

//Ciclos en PHP 
/*
  for
  while
  do .. while

  foreach // php only
  */

$intPeriodos = 12;
$fltCapital = 10000;
$fltTasa = 0.38 / 12;
$blnTasaCmp = false; //si es true es compuesta

$arrCuotas = array();
if (isset($_POST["btnInteresCompuesto"])) {
  $blnTasaCmp = true;
  $intPeriodos = intval($_POST["intPeriodos"]);
  $fltCapital = floatval($_POST["fltCapital"]);
  $fltTasa = floatval($_POST["fltTasa"]);
  $saldo = $fltCapital;
  $fltCuotaNivelada = (($fltCapital) / ((1 - ((1 + $fltTasa) ** (-$intPeriodos))) / $fltTasa));
  $fltCuotaNivelada = round($fltCuotaNivelada, 2);
  for ($cuota = 1; $cuota <= $intPeriodos; $cuota++) {
    $fltInteresCuota = round($saldo * $fltTasa,2);
    $fltCapitaCuota = $fltCuotaNivelada - $fltInteresCuota;
    //$saldo = $fltCapital - $capitalCuota;
    $arrCuotaDetalle = array();
    $arrCuotaDetalle["linea"] = $cuota;
    $arrCuotaDetalle["cuota"] = $fltCuotaNivelada;
    $arrCuotaDetalle["capital"] = $fltCapitaCuota;
    $arrCuotaDetalle["interes"] = $fltInteresCuota;
    $saldo = $saldo - $fltCapitaCuota;
    if ($saldo < 0){
      $arrCuotaDetalle["cuota"] = $fltCuotaNivelada + $saldo;
      $arrCuotaDetalle["capital"] = $fltCapitaCuota + $saldo;
      $saldo = 0;
    }
    $arrCuotaDetalle["saldo"] = $saldo;
    $arrCuotas[] = $arrCuotaDetalle;
  }
}
if (isset($_POST["btnInteresSimple"])) {
  $blnTasaCmp = false;
  $intPeriodos = intval($_POST["intPeriodos"]);
  $fltCapital = floatval($_POST["fltCapital"]);
  $fltTasa = floatval($_POST["fltTasa"]);
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos en PHP</title>
</head>

<body>
  <form action="05_ciclos.php" method="post">
    <label>Periodos <input name="intPeriodos" type="number" placeholder="Número de Periodos" value="<?php echo $intPeriodos; ?>" /></label>
    <label>Capital <input name="fltCapital" type="number" placeholder="Capital" value="<?php echo $fltCapital; ?>" /></label>
    <label>Tasa de Interés <input name="fltTasa" type="number" min=0 max=1 step=0.0001 placeholder="Tasa de interés de 0.00 a 0.99" value="<?php echo $fltTasa; ?>" /></label>
    <button type="submit" name="btnInteresCompuesto">Calcular con Interés Compuesto</button>
    <button type="submit" name="btnInteresSimple">Calcular con Interés Simple</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>Cuota</th>
        <th>Monto</th>
        <th>Capital</th>
        <th>Interés</th>
        <th>Saldo</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($arrCuotas as $arrCurrentCuota) {
      ?>
        <tr>
          <td><?php echo $arrCurrentCuota["linea"]; ?> </td>
          <td><?php echo $arrCurrentCuota["cuota"]; ?> </td>
          <td><?php echo $arrCurrentCuota["capital"]; ?> </td>
          <td><?php echo $arrCurrentCuota["interes"]; ?> </td>
          <td><?php echo $arrCurrentCuota["saldo"]; ?> </td>
        </tr>
      <?php
      } //end foreach $arrCuotas
      ?>
    </tbody>
  </table>
</body>

</html>
