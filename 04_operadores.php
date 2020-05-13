<?php
    //Operadores Aritmeticos
    /*
      +  suma
      - resta
      * multiplicar
      / dividir
      % modulus
      ++ (Acumulador por n)
      -- (Reductor por n)
      ** (Exponencial)
     */
    $d = 2;
    $r = $d**3; //8
    $s= $r ** (1/2); // sqrt($r);

    $a =1;
    $b =3;
    $r = $a + $b;
    $r = $a - $b;
    $r = $a * $b;
    $r = ($b!==0)? $a / $b : 0;

    if ($b!==0) {
      $r = $a / $b;
    } else {
      $r = 0;
    }

    $r ++;
    $r --;
    $r += 2;
    $r -= 2;
    $r *= 3;

    $r = $a % $b;
  //Abre transacation en DB
  $cuantosVan = 0;
    for( $i = 0; $i <= 18000; $i++){
        // ... Muchas operaciones que carga 8 MB de Memoria por cada ciclo
        $cuantosVan ++;
        if (($cuantosVan % 50) === 0){
              // Hacer commit en DB
        }
    }
    //Hace Ultimo Commit en DB
    //Cierra la transaccion en DB

    $str1 = 'Hola';
    $str2 = 'Mundo';

    $strConcatenado = "$str1  $str2"; // Hola Mundo;  //Depende de magic quotes enabled
    $strConcatenado = $str1 + $str2; // 0
    $strConcatenado = $str1 . $str2; // Hola Mundo;

    $a = true;
    $b = false;
    if ( $a == $b ){

    } // false

    if ( 1 == "1") {  //compara valor
      // true
    }
    if (1 === "1") {  // compara tipo y valor
      // false
    }

if (1 != "1") {  //compara valor
  // false
}
if (1 !== "1") {  // compara tipo y valor
  // true
}

if ( !$b ) {
    // true
}

if  ( 0 )  {
  // false
}

if ( 10 ) {
  // true
}

// intval
// floatval


?>
