<?php

  $arreglos = array();

  // todo arreglo en PHP es  ASSOCIATIVO

  $i[0] = 1;
  $i[1] = 2;
  $i[2] = 3;
  $i[3] = 4;

  $arreglos["mensaje"] = "Hola Mundo";
  $arreglos[] = "Otra palabra";
  $arreglos["texto"] = "Un text";
  $arreglos[] = 102938;

  ///echo $arreglos[1]; // Otra Palabra

  //
  $meses = array("Ene"=>"Enero","Feb"=>"Febrero",
                "Mar"=>"Marzo","Abr"=>"Abril");

  echo '<select name="asdf">';
  foreach( $meses as $mes){
    echo '<option value="">'.$mes.'</option>';
  }
  echo '</select>';

  $meses["May"] = "Mayo";
  $meses["Jun"] = "Junio";
  $meses["Ene"] = "Primer Mes";
  echo '<select name="asdf">';
  foreach( $meses as $mescod=>$mesdesc){
    echo '<option value="'.$mescod.'">'.$mesdesc.'</option>';
  }
  echo '</select>';


  // Registrar El Nombre, Correo y Telefono de Clientes
  $cliente = array("nombre"=>"","correo"=>"","telefono"=>"");
  $clientes = array();

  $clientes[] = array(
                      "nombre"=>"Orlando",
                      "correo"=>"a@x.c",
                      "telefono"=>"12341234"
                    );
  $clientes[] = array(
                      "nombre"=>"Jose",
                      "correo"=>"a@x.c",
                      "telefono"=>"123d41234"
                    );
    $clientes[] = array(
                        "nombre"=>"Yuli",
                        "correo"=>"a@x.c",
                        "telefono"=>"12341234"
                      );
/*
  |---Nombre-----|------Correo-------|----Telefono----|
    Orlando             a@b.c             12341234123
    Jose                a@b.c
    Yuli                a@b.c
  //print_r($meses);
  */

  // print_r($clientes);
  echo '<table border="1">';
  foreach($clientes as $currentCliente){
    echo '<tr>';
    echo '<td>'.$currentCliente["nombre"].'</td>';
    echo '<td>'.$currentCliente["correo"].'</td>';
    echo '<td>'.$currentCliente["telefono"].'</td>';
    echo '</tr>';
  }
  echo '</table>';
?>
