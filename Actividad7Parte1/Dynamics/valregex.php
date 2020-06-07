<?php
echo "<!DOCTYPE html>
      <html lang='en' dir='ltr'>
        <head>
          <meta charset='utf-8'>
          <title>Respuestas</title>
        </head>
        <body style='background-color: rgb(0,255,255)'>";

    $RFC= $_GET['RFC'];
    $Nombre= $_GET['nombre'];
    $RFCVoF = preg_match("/^[A-ZÑ&]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[A-Z0-9_]{3}$/", $RFC);
    $NomVoF = preg_match("/(^[A-ZÑÁÉÍÓÚ]{1}([a-zñáéíóú]+){2,})(\s[A-ZÑÁÉÍÓÚ]{1}([a-zñáéíóúy]+){2,})?$/", $Nombre);

    if($NomVoF){
      echo "Nombre válido: ".$Nombre;
    }
    else {
      echo "Nombre inválido: ".$Nombre;
    }

    echo "<br>";

    if($RFCVoF){
      echo "RFC válido: ".$RFC;
    }
    else{
      echo "RFC inválido: ".$RFC;
    }

    "</body>
  </html>"
?>
