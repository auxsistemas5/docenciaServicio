<?php
    session_start();
    require 'conexion.php';
    $id = $_POST['num'];

    $sql = "DELETE FROM preguntas WHERE id = $id ";

    $consulta = mysqli_query($conexion,$sql);

    if($consulta){
        echo '<script language="javascript">alert("Exito!, Se elimino la pregunta");window.location.href="../Administrator/register_seminar.php"</script>';
    }else{
        echo '<script language="javascript">alert("Error, no se Elimino!");window.location.href="../Administrator/register_seminar.php"</script>';
    }





?>