<?php
  // Comentario en una sola linea

  /*
    Esto es un comentario en múltiples
    lineas util para explicar un bloque
    de código
  */

  $estEsUnaVariable = "Se puede asignar un valor";
  // Toda expresión en PHP termina con ;
  // int $Edad = 10;
  // Que no es fuertemente tipeado.
  $edad = 10;
  $edad = "Mas de Cinco años";
  $edad = true;

  // Se debe establecer un nomeclatura para
  // la definición de las variables.

  // vb6
  // sharon1, sharon2, sharon3,.......sharon2013

  $cuandolosgatosnoestanlosratonessalenaparrandear = true;
  $cuandoLosGatosNosEstanLosRatonesSalenAParrandear = true;

  $coeficienteDeRegresiondeEstudioDeParticulasS = 0.234512;
  // Camel Case | Camello
  // python case  | serpiente
  $cuando_los_gatos_no_estan_los_ratones_salen_a_parrandear = true;

  $mayoriaDeEdad = 21;
  $mayoriaDeEdad = false;

  $intMayoriaDeEdad = 21;
  $boolMayorDeEdad = false;
  $esMayoriaDeEdad = true;

  // number , string , boolean, object, array

  // Estructuras de Control
  if ( true ) {
      // Expression que se ejucatar si es verdadero el criterio
  } else {
    // expresiones alternas
  }

  if ( !false ) {
    // Expresion verdadera
  } elseif ( true ) {
    // Expresion verdader condicion
  } else {
    // la alterna
  }

  $txtVariableControl = 'ABC';
  switch ( $txtVariableControl) {
      case 'ABC':
          // expresiones del  bloque
          break;
      case 'ABD':
            // expresiones del bloque 2
            break;
        default:
            //expresion que se ejucataran
            // si las anteriores no rompen
            // el bloque
  }

  $esMayorDeEdad = ( $miEdad < 21 ) ? true : false;

  if ( $miEdad < 21 ) {
    $esMayorDeEdad = true;
  } else {
    $esMayorDeEdad = false;
  }

  // Ciclos

  for ( $i = 0; $i < 100; $i++ ){
    // Expresion que se ejecutaran en cada iteración.

  }

  while ( true ) {
    // expresiones
  }

  do {
    //expresiones
  } while ( true );

  //
  // funciones
  // variable scope
  $strUnTextoZ = "Hola Mundo";
  function nombreFuncion () {
    // Expresiones a ejecutarse
    $strUnTextoZ = "Dentro del Mundo";
    return $strUnTextoZ;
  }
  echo $strUnTextoZ;
  // a) Dentro del Mundo
  // b) Hola Mundo
  //-------------------------
  // b // Hola Mundo

  // Si quiero tener acceso a una variable
  // dentro de la funcion con un alcance distinto
  // Opcion 1 pasar la variable por referencia
  //          usar punteros
  function ejemploRef (&$strUnTextoZ) {
    return $strUnTextoZ;
  }

  // Opcion 2 forzar a usar el simbolo del alcance
  //  superior usando la declacion GLOBAL

  function ejemploGlobal () {
    global $strUnTextoZ;
    $strUnTextoZ = "modificado por global";
  }

  // PHP puede usar recursividad

  function factorialN ($n){
    return ($n <= 0)? 1: $n * factorialN($n-1);
  }
  echo factorialN(4);
  // 24

  // Arreglo

  // estructura de listas ligadas dinamicamente
  // puntero al anterior , elemento, puntero al siguiente

  // int[5] arregloNumero;
  // arregloNumero[0-4];
  $arreglo = array();
  $arreglo[] = "Hola Arreglo 1";
  $arreglo[] = true;

  echo $arreglo[0]; // Hola Arreglo 1
  echo $arreglo[1]; // 1

  $arreglo["meta1"] = "Otro Valor";
  //echo $arreglo[2] ; // Otro Valor ? error

  $arreglo[] =  "Hola Mundo 4";
  echo $arreglo[2]; /// Hola Mundo 4

  $arreglo[true] = "Adios mundos";
  echo $arreglo[1]; // Adios mundos;

  // count($arreglo) //
  /*
  for ($i = 0; $i<4 ; $i++ ) {
    echo $arreglo[$i];
  }
  esto esta muy mal no usar nunca
  */

  foreach ($arreglo as $arregloItem){
    echo $arregloItem;
  }
  // Hola Arreglo 1, Adios mundos,
  // Otro Valor, Hola Mundo 4

$persona = array();
$persona["nombre"] = "Orlando";
$persona["apellido"] = "Betancourth";
$persona["email"] = "obetancourthunicah@gmail.com";

echo '<ul>';
foreach($persona as $llave => $valor){
  echo '<li>'.$llave.' : '.$valor.'</li>';
}
echo '</ul>';

/*
  <ul>
    <li>nombre : Orlando</li>
    <li>apellido : Betancourth</li>
    <li>email : obetancourthunicah@gmail.com</li>
  </ul>
*/

$arregloConConstructor = array(1,2,3,"hola","adios");

$arregloConLlavesEnCons = array(
  "periodo" => "201802",
  "codigocurso" => "IF411",
  "codigoseccion" => "1901",
  "docente" => "yo"
);

echo $arregloConLlavesEnCons["docente"]; // yo

// Operadores

// + suma
// - resta
// +=
//    $a = 10; $a += 15; //$a 25
// -=
// *
// /
// *=
// **   $a = 2 ; $a = $a ** 2; // 4
// /=
// ++ incrementa 1
// -- decrementa

// ==  compara valores
// === compara tipo de datos y valor
// !
// <
// >
// >=
// <=
// &&
// ||


  // (expresion codicional | true | false) ? valorTrue : valorFalse;

 /*
  void nombreFuncion() {

  }
  */
  /*string nombreFuncion(){
    return "algo";
  }*/


  $codigo = "codigo interpretado por PHP";
?>
