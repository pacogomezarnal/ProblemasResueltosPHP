<?php
/**
 *
 */
class Tm
{
  //Array de ventas privado
  private $ventas=[];

  //funcion que almacena un nuevo valor
  public function almacenarVenta($venta){
    if($venta>0){
      //Almacenar venta
      $this->ventas[]=$venta;
    }
  }

  //funcion que calcula el ticket medio
  public function ticketMedio(){
    $total=0;
    foreach ($this->ventas as $key => $value) {
      $total=$total+$value;
    }
    return $total/count($this->ventas);
  }

  //Comprobacion de nuestra clase
  public function imprimirVentas(){
    foreach ($this->ventas as $key => $value) {
      echo $value."<br>";
    }
  }

  //Getter del array
  public function getVentas(){
    return $this->ventas;
  }

}

 ?>
