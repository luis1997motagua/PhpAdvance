<?php
  echo "Hola Mundo";
  // Esto es un comentario de una linea

  /*
    Esto es un comentario de multiples
    lineas
  */
  $txtMensaje = "Hola Mundo";
  // una variable empieza con el simbolo $
  $txtMensaje = 1;

  //establecer usar una nomenclatura de
  // definicion de variables

  $cuandolosgatosnoestanlosratonesfiestahacen = true;
  //camel case
  $cuandoLosGatosNoEstanLosRatonesFiestaHacen = true;
  //snake
  $cuando_los_gatos_no_estan_los_ratones_fiesta_hacen = true;
    //hungaro
    $boolCuandoLosGatosNoEstanLosRatonesFiestaHacen= true;
    $txtEdad = "Cincuenta Años";
    $intEdad = 50;
    $edad = "Cincuenta Años"; //FATAL ERROR
    $edad = 50; //FATAL ERROR
    //Tipos de Datos en PHP
    //numerico -> enteros, reales, double, flotantes
    //text -> texto char
    //boolean -> boolean
    //array -> array()
    //object -> objeto (c++)

    $intEdad = 50;
    $intEdad = 5 + $intEdad; //55
    $intEdad = $intEdad - 20; //35
    $intEdad = $intEdad * 2; //70
    $intEdad = $intEdad / 2; //35
    $intEdad ++; //36
    $intEdad --; //35
    $intEdad += 20; //55
    $intEdad -= 20; //35
    $intEdad *= 2; //70
    $intEdad = pow($intEdad, 2); //4900
    // $intEdad = $intEdad ** 2;
    $intEdad = $intEdad % 2;

     //Estructura de Control
     if($intEdad == 50){
       //Expresion verdadera
     }else{
       //Expresion falsa
     }
     // Operadores logicos
     /*
          == comparacion de valor
              10 == "10"  true
              "10" == 10  true
              "10" == "10" true
          === comparacion de tipo y valor
              10 === 10   true
              10 === "10" false
          != valor es distintos
          >   mayor que
          <   menor que
          <= menor igual
          >= mayor igual
          !  negación
            !(10 === 10)   false
     */
     switch ($intEdad) {
       case '10':
         # code...
         break;

       default:
         # code...
         break;
     }
      //inline exclusive
     $intEdad = ($intEdad < 50)?40: 60;
     if($intEdad < 50){
       $intEdad = 40;
     }else{
       $intEdad = 60;
     }

     //Estructura de Ciclos
     //for do while while
     for ($i=0; $i < 10; $i++) {
       # code...
     }
     while ($a <= 10) {
       # code...
       //controlar manualmente la variable de control
     }
     do {
       # code...
       //controlar manualmente la variable de control
     } while ($a <= 10);
 ?>
