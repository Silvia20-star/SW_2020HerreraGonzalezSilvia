<?php
echo "<!DOCTYPE html>
      <html lang='en' dir='ltr'>
        <head>
          <meta charset='utf-8'>
          <title>Respuestas</title>
        </head>
        <body style='background-color: rgb(0,255,255)'>";
    //Variasbles en donde se almacenan los datos enviados.
    $RFC= $_GET['RFC'];
    $Nombre= $_GET['nombre'];
    $Contraseña= $_GET['contraseña'];
    //Regex para validar los datos enviados.
    $RFCVoF = preg_match("/^[A-ZÑ&]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[A-Z0-9_]{3}$/", $RFC);
    $NomVoF = preg_match("/(^[A-ZÑÁÉÍÓÚ]{1}([a-zñáéíóú]+){2,})(\s[A-ZÑÁÉÍÓÚ]{1}([a-zñáéíóúy]+){2,})?$/", $Nombre);
    $Contr = preg_match("/^(?=\P{Ll}*\p{Ll})(?=\P{Lu}*\p{Lu})(?=\P{N}*\p{N})(?=[\p{L}\p{N}]*[^\p{L}\p{N}])[\s\S]{10,}$/", $Contraseña);
    //Validación de si el nombre es válido o inválido.
    if($NomVoF){
      echo "Nombre válido: ".$Nombre;
    }
    else {
      echo "Nombre inválido: ".$Nombre;
    }

    echo "<br>";
    //Validación de si el RFC es válido o inválido.
    if($RFCVoF){
      echo "RFC válido: ".$RFC;
    }
    else{
      echo "RFC inválido: ".$RFC;
    }

    echo "<br>";
    //Validación de si la contraseña es válida o inválida.
    if($Contr){
      echo "Su contraseña: ".$Contraseña. " es segura.";
    }
    else{
      echo "Su contraseña: ".$Contraseña. " es insegura.";
    }

    "</body>
  </html>"
?>
