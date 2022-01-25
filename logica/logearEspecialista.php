<?php
    require 'conexion.php';
    session_start();

    $document = $_POST['document'];

    $sql = "SELECT docentes.id,docentes.name,programas.programs_name FROM docentes INNER JOIN programas ON docentes.type_prog = programas.id WHERE document = $document AND calification = 1 ";

    $consulta = mysqli_query($conexion,$sql);
    $datos = mysqli_fetch_array($consulta);
    //echo $datos[0];
    if($datos[0] > 0 AND $datos[0] != null){
        $_SESSION['name'] = $datos[1];
        $_SESSION['programa'] = $datos[2];
        echo '<script language="javascript">alert("Entro con exito");window.location.href="../Especialistas/dashboard.php"</script>';
    }else if($datos[0] < 1 OR $datos[0] == null){
        echo '<script language="javascript">alert("No se pudo Acceder");window.location.href="../especialistas.php"</script>';
    }

?>