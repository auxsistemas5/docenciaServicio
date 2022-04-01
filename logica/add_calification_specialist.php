<?php
    require 'conexion.php';
    $id = $_GET['student'];
    $conocimiento = $_POST['conocimiento'];
    $actitud = $_POST['actitud'];
    $nombre = $_GET['nombre'];
    $seminario = $_POST['seminario'];
    $observacion = $_POST['observacion'];

    $sql = "INSERT INTO calificacion_docente(docente,student,result_conocimiento,result_actitud, result_seminario, observacion) 
    VALUES(
        '$nombre',
        '$id',
        '$conocimiento',
        '$actitud',
        '$seminario',
        '$observacion'
    )";

    $sqlinsertar = mysqli_query($conexion,$sql);

    if($sqlinsertar){
        echo '<script language="javascript">alert("Se Califico con exito!");window.location.href="../Especialistas/calificar.php"</script>';

    }else{
        echo '<script language="javascript">alert("Error no se pudo grabar la calificacion!");window.location.href="../Especialistas/calificar.php"</script>';
    }


?>