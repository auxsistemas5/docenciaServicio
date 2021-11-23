<?php

    require 'conexion.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM documentos_instituciones WHERE id = '$id'";
    $res = mysqli_query($conexion,$sql);

    if($res > 0){
        echo '<script language="javascript">alert("Eliminado con exito");window.location.href="../Administrator/view_registers_institution.php"</script>';
    }else{
        echo '<script language="javascript">alert("No se elimino,Verifique nuevamente");window.location.href="../Administrator/view_registers_institution.php"</script>';
    }



?>