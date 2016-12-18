<?php
/**
 * Calculador de componentes/precio PC
 */
class calculadorPC
{
  //Atributos
  private $numRam=0;
  private $numRamPrec=56.10;
  private $numHd=0;
  private $numHdPrec=49.50;
  private $monitor=0;
  private $monitorPrec=103;
  private $combo=0;
  private $comboPrec=29.90;

  private $precioBasePC=300;
  private $precioTotal=0;

  //Constructor vacio
  function __construct()
  {
  }

  //Calculo de precioFinal
  private function calculoFinal(){
    //Evita dobles calculos
    $this->precioTotal=0;
    //CAlculo
    $this->precioTotal=$this->precioBasePC+$this->numRam*$this->numRamPrec;
    $this->precioTotal=$this->precioTotal+$this->numHd*$this->numHdPrec;
    $this->precioTotal=$this->precioTotal+$this->monitor*$this->monitorPrec;
    $this->precioTotal=$this->precioTotal+$this->combo*$this->comboPrec;
  }
  public function getprecioTotal(){
    $this->calculoFinal();
    return $this->precioTotal;
  }

  //Imprimir por pantalla la configuracion y el precio Total
  public function imprimirConfFinal(){
    $this->calculoFinal();
    echo "------------------- CONF TOTAL -------------"."<br>";
    echo "<ul>";
    echo "<li>Num RAM: ".$this->numRam."</li>";
    echo "<li>Num HD: ".$this->numHd."</li>";
    echo "<li>Num Monitor: ".$this->monitor."</li>";
    echo "<li>Num Combo: ".$this->combo."</li>";
    echo "</ul>";
    echo "Precio TOTAL: ".$this->precioTotal."</br>";
    echo "------------------- CONF TOTAL -------------"."<br>";
  }
  //GETTERS
  public function getNumRam()
  {
      return $this->numRam;
  }

  public function getNumHd()
  {
      return $this->numHd;
  }

  public function getMonitor()
  {
      return $this->monitor;
  }

  public function getCombo()
  {
      return $this->combo;
  }

  //SETTER
  public function setNumRam($numRam)
  {
      if($numRam<0){
        $this->numRam = 0;
      }elseif ($numRam>2) {
        $this->numRam = 2;
      }else{
        $this->numRam = $numRam;
      }
  }

  public function setNumHd($numHd)
  {
    if($numHd<0){
      $this->numHd  = 0;
    }elseif ($numHd>2) {
      $this->numHd  = 2;
    }else{
      $this->numHd  = $numHd;
    }
  }

  public function setMonitor($monitor)
  {
    if($monitor<0){
      $this->monitor  = 0;
    }elseif ($monitor>1) {
      $this->monitor  = 1;
    }else{
      $this->monitor = $monitor;
    }
  }

  public function setCombo($combo)
  {
    if($combo<0){
      $this->combo = 0;
    }elseif ($combo>1) {
      $this->combo  = 1;
    }else{
      $this->combo= $combo;
    }
  }

}

 ?>
