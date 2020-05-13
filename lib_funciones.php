<?php

function sumar($a,$b,$c=0){
  return $a + $b + $c;
}
function restar($a,$b,$c = 0){
  return $a - $b - $c;
}

function factorial($n){
  if($n==1) return 1;
  return $n * factorial(($n-1));
}



// function factorialSR($n){
//   if($n==0){
//     return 1;
//   }else{
//     $r = $n;
//     while($n){
//       $r *= ($n-1);
//       $n--;
//     }
//   }
// }

?>
