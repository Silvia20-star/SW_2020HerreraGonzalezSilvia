<?php
//HTML para colocar título y color a la página.
echo "<!DOCTYPE html>
      <html lang='en' dir='ltr'>
        <head>
          <meta charset='utf-8'>
          <title>Respuestas</title>
        </head>
        <body style='background-color: rgb(0,255,255)'>";

    $RFC= $_POST['RFC'];//Varible en donde se guarda el RFC enviado y el método de envio.
    $Nombre= $_POST['nombre'];//Varible en donde se guarda el nombre enviado y el método de envio.
    $RFCVoF = preg_match("/^[A-ZÑ&]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[A-Z0-9_]{3}$/", $RFC);//Regex para validar que el RFC sea correcto.
    $NomVoF = preg_match("/(^[A-ZÑÁÉÍÓÚ]{1}([a-zñáéíóú]+){2,})(\s[A-ZÑÁÉÍÓÚ]{1}([a-zñáéíóúy]+){2,})?$/", $Nombre);//Regex para que el pueda tener 1 o 2 nombres.
    //Valida si el/los nombre(s) introducido(s) son correctos, mandando los respectivos mensajes.
    if($NomVoF){
      echo "Nombre válido: ".$Nombre;
    }
    else {
      echo "Nombre inválido: ".$Nombre;
    }

    echo "<br>";

    //Valida si el RFC es correcto, mandando los respectivos mensajes.
    if($RFCVoF){
      echo "RFC válido: ".$RFC;
    }
    else{
      echo "RFC inválido: ".$RFC;
    }

    "</body>
  </html>"
?>
