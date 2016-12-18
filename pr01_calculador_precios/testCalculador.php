<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando calculador de precios</title>
  </head>
  <body>
    <?php
    //Tester de calculadorPC
    include "calculadorPC.php";

    $c=new calculadorPC();

    //REalizando prueba
    echo "Numero de monitores: ".$c->getMonitor()."<br>";
    $c->setMonitor(1);
    echo "Numero de monitores: ".$c->getMonitor()."<br>";

    //Comprobar el precio Total
    $c->setNumRam(3);
    echo "Numero de RAM: ".$c->getNumRam()."<br>";
    $c->setNumHd(1);
    $c->setCombo(-3);
    echo "Combo: ".$c->getCombo()."<br>";

    //Imprimimos el precio
    echo "Precio Total: ".$c->getprecioTotal()."<br>";
    $c->imprimirConfFinal();
     ?>
  </body>
</html>
