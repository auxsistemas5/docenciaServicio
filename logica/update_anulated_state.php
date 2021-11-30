<?php
    session_start();
    require 'conexion.php';
    $id = $_POST['id'];

    
    $slqA = "UPDATE registro SET anulated = 1 WHERE registro.id = '$id'";
    $resA = mysqli_query($conexion,$slqA);
    
    if($resA){
        echo '<script language="javascript">alert("se Actualizo Exitosamente");window.location.href="../Administrator/view_registers_students.php"</script>';
    }else{
        echo '<script language="javascript">alert("No se Actualizo, Error");window.location.href="../Administrator/view_registers_students.php"</script>';
    }
?>