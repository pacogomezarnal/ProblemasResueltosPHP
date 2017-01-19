<?php
/**
 *
 */
class CalculoGym
{

  private $socios=[];

  public function nuevoSocio($socio){
    if($socio>0) $this->socios[]=$socio;
  }

  public function mediaSocios(){
    $total=0;
    foreach ($this->socios as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->socios)/count($this->socios);
  }
}

 ?>
