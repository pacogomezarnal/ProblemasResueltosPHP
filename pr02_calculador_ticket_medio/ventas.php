<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculador de ticket medio semanal</title>
  </head>
  <body>
    <?php
      include "tm.php";

      //Nuevo objeto creado
      $ticket_medio=new Tm();

      //Introducir dos ventas
      $ticket_medio->almacenarVenta(100);
      $ticket_medio->almacenarVenta(210);

      //Funcion de Comprobacion
      echo "<hr>";
      $ticket_medio->imprimirVentas();

      //Introducir tercera venta
      $ticket_medio->almacenarVenta(9.5);

      //Funcion de Comprobacion
      echo "<hr>";
      $ticket_medio->imprimirVentas();

      //Introducir cuarta venta
      $ticket_medio->almacenarVenta(-10);

      //Funcion de Comprobacion
      echo "<hr>";
      $ticket_medio->imprimirVentas();

      //Introducir el resto de valores
      $ticket_medio->almacenarVenta(103);
      $ticket_medio->almacenarVenta(24.75);
      $ticket_medio->almacenarVenta(378.99);
      $ticket_medio->almacenarVenta(126);
      $ticket_medio->almacenarVenta(97.34);

      //Funcion de Comprobacion
      echo "<hr>";
      $ticket_medio->imprimirVentas();

      //Calcular el ticket medio
      echo "<hr>";
      $resultado=$ticket_medio->ticketMedio();
      echo $resultado;
     ?>
  </body>
</html>
