<?php

function getGeneroFromCodigo($intGenero, $returnArray = false){
   $arrGeneros = array(
     1 => "Masculino",
     2 => "Femenino"
   );
   // Las llaves pueden ser numerico o texto
   if($returnArray){
     return codifyArray($arrGeneros);
     /*
      array(
        0=>array("code"=>1,"value"=>"Masculino"),
        1=>array("code"=>2, "value"=>"Femenino")
      )
      */
   }else{
    return (isset($arrGeneros[$intGenero]))? $arrGeneros[$intGenero]:'ND';
  }
}

function getGamaTelefonoFromCodigo($intGamaTel, $returnArray = false)
{
  //baja, media,
 // *    media alta, alta, ultra alta
  $arrGamas = array(
    1 => "Baja",
    2 => "Media",
    3 => "Media Alta",
    4 => "Alta",
    5 => "Ultra Alta"
  );
  // Las llaves pueden ser numerico o texto
  if($returnArray){
    return codifyArray($arrGamas);
  }
  return (isset($arrGamas[$intGamaTel])) ? $arrGamas[$intGamaTel] : 'ND';
}

function getInfluenciaCompraByCode($intInfluencia, $returnArray = false){
  //ninguna, baja, media, alta, totalmente
  $arrInfluencia = array(
     1=>"ninguna",
     2=>"Baja",
     3=>"Media",
     4=>"Alta",
     5=>"Totalmente"
  );
  if($returnArray){
    return codifyArray($arrInfluencia);
  }
  return (isset($arrInfluencia[$intInfluencia])) ? $arrInfluencia[$intInfluencia] : 'ND';
}

function getUseTelAgainByCode($intUsariaTelNuevamente, $returnArray=false){
  //
  $arrUseTelAgain = array(
    1 =>"No",
    2 =>"Muy poco probable",
    3 =>"Posiblemente",
    4 =>"Muy probable",
    5 =>"Definitivamente"
  );
  if($returnArray){
    return codifyArray($arrUseTelAgain);
  }
  return (isset($arrUseTelAgain[$intUsariaTelNuevamente])) ? $arrUseTelAgain[$intUsariaTelNuevamente] : 'ND';
}

function crearEncuesta(
    $intEdad,
    $strEmail,
    $intGenero,
    $bolTelefono,
    $intGamaTel,
    $bolCompraNuevo,
    $bolUsoTelCompra,
    $intInfluencia,
    $intUsariaTelNuevamente
){
    return array(
    "intEdad"=> $intEdad,
    "strEmail"=> $strEmail,
    "intGenero"=> $intGenero,
    "strGenero"=> getGeneroFromCodigo($intGenero),
    "bolTelefono"=> $bolTelefono,
    "intGamaTel"=> $intGamaTel,
    "strGamaTel"=> getGamaTelefonoFromCodigo($intGamaTel),
    "bolCompraNuevo"=> $bolCompraNuevo,
    "bolUsoTelCompra"=> $bolUsoTelCompra,
    "intInfluencia"=> $intInfluencia,
    "strInfluencia"=> getInfluenciaCompraByCode($intInfluencia),
    "intUsariaTelNuevamente"=> $intUsariaTelNuevamente,
    "strUsariaTelNuevamente"=> getUseTelAgainByCode($intUsariaTelNuevamente)
    );
}

function codifyArray($arrayToCodify){
  $newArray = array();
  foreach($arrayToCodify as $code=>$value){
    $newArray[] = array("code"=>$code, "value"=>$value);
  }
  return $newArray;
}

function getComboFromArray(
  $arrayCmb,
  $valColumn,
  $valTexto,
  $valSelected,
  $cmbName
) {
  $cmbBuffer = '<select name="' . $cmbName . '">';
  foreach ($arrayCmb as $arrItem) {
    $cmbBuffer .= '<option value="' . $arrItem[$valColumn].'"';
    $cmbBuffer .=  (($arrItem[$valColumn] ==  $valSelected) ? " selected " : "") . '">';
    if (is_array($valTexto)) {
      foreach ($valTexto as $keys) {
        $cmbBuffer  .= (isset($arrItem[$keys])) ? $arrItem[$keys] : $keys;
      }
    } else {
      $cmbBuffer  .= $arrItem[$valTexto];
    }
    $cmbBuffer .= '</option>';
  }
  $cmbBuffer .= '</select>';
  return $cmbBuffer;
}

?>
