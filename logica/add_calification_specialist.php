<?php
    require 'conexion.php';
    $student = $_GET['student'];
    $conocimiento = $_POST['conocimiento'];
    $actitud = $_POST['actitud'];
    $nombre = $_GET['nombre'];
    $seminario = $_POST['seminario'];
    $observacion = $_POST['observacion'];
    $mes_calificado = $_POST['mes_calificado'];

    $validar = "SELECT id FROM usuarios WHERE username = '$student'";
    $conex = mysqli_query($conexion,$validar);
    $datosUser = mysqli_fetch_array($conex);

    $id_user = $datosUser['id'];

    $sql = "INSERT INTO calificacion_docente(docente,id_user,student,result_conocimiento,result_actitud, result_seminario, observacion,mes_calificado) 
    VALUES(
        '$nombre',
        '$id_user',
        '$student',
        '$conocimiento',
        '$actitud',
        '$seminario',
        '$observacion',
        '$mes_calificado'
    )";

    $sqlinsertar = mysqli_query($conexion,$sql);

    if($sqlinsertar){
        echo '<script language="javascript">alert("Se Califico con exito!");window.location.href="../Especialistas/calificar.php"</script>';

    }else{
        echo '<script language="javascript">alert("Error no se pudo grabar la calificacion!");window.location.href="../Especialistas/calificar.php"</script>';
    }


?>