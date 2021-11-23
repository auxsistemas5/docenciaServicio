<?php

    require 'conexion.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM instituciones_contacto WHERE id = '$id'";
    $res = mysqli_query($conexion,$sql);

    if($res > 0){
        echo '<script language="javascript">alert("Contacto Eliminado con exito");window.location.href="../Administrator/view_registers_institution.php"</script>';
    }else{
        echo '<script language="javascript">alert("Contacto no eliminado, Verifique nuevamente");window.location.href="../Administrator/view_registers_institution.php"</script>';
    }



?>