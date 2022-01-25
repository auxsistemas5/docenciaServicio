<?php
    require 'conexion.php';

    $mes = $_POST['month'];
    $estado = $_POST['state'];

    $sql = "UPDATE examen SET state = '$estado' WHERE month = '$mes'";

    $consulta = mysqli_query($conexion,$sql);

    if(!$consulta){
        echo '<script language="javascript">alert("No se Habilito, Error");window.location.href="../Administrator/manage_exams.php"</script>';

    }else{
        echo '<script language="javascript">alert("Estado Cambiado con exito!");window.location.href="../Administrator/manage_exams.php"</script>';
    }


?>