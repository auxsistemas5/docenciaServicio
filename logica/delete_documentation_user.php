<?php
    include 'conexion.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM documentosestudiantes WHERE id = '$id'";

    $respon = mysqli_query($conexion,$sql);

    if($respon > 0){
        echo '<script language="javascript">alert("Eliminado con exito");window.location.href="../Administrator/register_students.php"</script>';
    }else{
        echo '<script language="javascript">alert("Problemas para eliminar, verifique nuevamente");window.location.href="../Administrator/register_students.php"</script>';
    }

?>