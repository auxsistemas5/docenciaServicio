<?php

    require 'conexion.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM documentos_docentes WHERE id = '$id'";
    $res = mysqli_query($conexion,$sql);

    if($res > 0){
        echo '<script language="javascript">alert("Eliminado con exito");window.location.href="../Administrator/register_teachers.php"</script>';
    }else{
        echo '<script language="javascript">alert("Error,No se elimino,Verifique nuevamente");window.location.href="../Administrator/register_teachers.php"</script>';
    }



?>