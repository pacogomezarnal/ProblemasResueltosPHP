<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero socios semanales</title>
  </head>
  <body>
    <?php
    include "calculosGym.php";
    //echo "Numero de socios en lunes:". $_POST["lunes"];

    $gestor=new CalculoGym();
    //añadimos el lunes
    foreach ($_POST as $key => $value) {
      $gestor->nuevoSocio($value);
    }
    /*
    $gestor->nuevoSocio($_POST["lunes"]);
    $gestor->nuevoSocio($_POST["martes"]);
    $gestor->nuevoSocio($_POST["miercoles"]);
    $gestor->nuevoSocio($_POST["jueves"]);
    $gestor->nuevoSocio($_POST["viernes"]);
    $gestor->nuevoSocio($_POST["sabado"]);
    */
    //Calcula la media
    echo $gestor->mediaSocios();
     ?>

  </body>
</html>
