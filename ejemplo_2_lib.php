<?php

function obtenerArreglo($textoLargo){
  $wordsArray = array();
  $wordsArray = explode(' ', $textoLargo );
  return $wordsArray;
}

function obtenerFrecuencias($wordsArray){
  $frequencyArray = array();
  foreach($wordsArray as $word){
    if(isset($frequencyArray[$word])){
      $frequencyArray[$word] ++;
    }else{
      $frequencyArray[$word]  =  1;
    }
  }
  return $frequencyArray;
}

?>
