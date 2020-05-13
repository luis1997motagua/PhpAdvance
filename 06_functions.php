<?php

//funciones en PHP
function nombreDeLaFuncion($parametro,$parametro2){
  return $parametro." ".$parametro2;
}

// recursiva
function factorial($a){
  return $a * (($a===1)?1 : factorial($a-1));
}


$resultado = nombreDeLaFuncion("Hola", "Mundo");

echo $resultado;
echo '<br/>';

echo factorial(4);

function createProduct($id,$name,$price){
  return array(
    "id" => $id,
    "nombre" => $name,
    "precio" => $price,
    "fecha" => date("y-m-d")
  );
}



// $arrProducto = array();
// $arrProducto["id"] = 1;
// $arrProducto["nombre"] = "Producto ABC";
// $arrProducto["precio"] = 100.00;
// $arrProducto["fecha"] = getdate('y-m-d');

$arrCatalogo = array();
$arrCatalogo[]= createProduct(1,"Producto ABC", 100.00);
$arrCatalogo[] = createProduct(2, "Producto DFG", 200.00);

echo '<hr/>';

function getComboFromArray(
  $arrayCmb,
  $valColumn,
  $valTexto,
  $valSelected,
  $cmbName
  )
{
    $cmbBuffer = '<select name="'.$cmbName.'">';
      foreach ($arrayCmb as $arrItem) {
        $cmbBuffer .= '<option value="' . $arrItem[$valColumn];
        $cmbBuffer .=  ( ($arrItem[$valColumn] ==  $valSelected ) ? " selected " : ""  ) .'">';
        if (is_array($valTexto) ){
            foreach($valTexto as $keys){
               $cmbBuffer  .= (isset($arrItem[$keys]))? $arrItem[$keys]: $keys;
            }
        } else {
          $cmbBuffer  .= $arrItem[$valTexto];
        }
        $cmbBuffer .= '</option>';
      }
      $cmbBuffer .= '</select>';
      return $cmbBuffer;
}

echo getComboFromArray($arrCatalogo, "id", "nombre", "1", "cmbProds");
echo '<br/>';
echo getComboFromArray($arrCatalogo, "id", "precio", "1", "cmbProds2");

echo '<br/>';
echo getComboFromArray($arrCatalogo, "id", array("nombre", " | ", "precio", " (", "fecha",")"), "1", "cmbProds2");


// $arrProducto = array();
// $arrProducto["id"] = 2;
// $arrProducto["nombre"] = "Producto ABD";
// $arrProducto["precio"] = 200.00;
// $arrProducto["fecha"] = getdate('y-m-d');

// $arrCatalogo[] = $arrProducto;


?>
