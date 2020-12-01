<?php
if(isset($_POST["btn"])){
    $aquien="thebrowniemix.20@gmail.com";
    $tema="Correo";
    $mensaje="Llegaron los siguientes datos:\r\n";
    $mensaje.="Nombre:".$_POST["nombre"]."\r\n";
    $mensaje.="Correo:".$_POST["email"]."\r\n";
    $mensaje.="Mensaje:".$_POST["mensaje"]."\r\n";
    mail($aquien,$tema,$mensaje);
    print "correo enviado";

}
?>