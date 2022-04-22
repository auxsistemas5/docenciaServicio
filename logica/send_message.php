<?php

    require 'conexion.php';

    date_default_timezone_set('America/Bogota');
    $hora = date('d-m-Y h:i:s');
    $mensaje = $_POST['mensaje'];
    $remitente = $_POST['remitente'];

    echo $mensaje;
    echo $remitente;

    $sql = "INSERT INTO chat(remitente,mensaje,hora_envio) VALUES(
        '$remitente',
        '$mensaje',
        '$hora'
    )";

    $verificarsql = mysqli_query($conexion,$sql);

    if($verificarsql){
        echo "<script>console.log('mensaje enviado');</script>";
    }else{
        echo "<script>console.log('no se pudo enviar');</script>";
    }

?>