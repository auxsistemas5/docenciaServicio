<?php
    require 'conexion.php';
    $id = $_POST['student'];
    $conocimiento = $_POST['conocimiento'];
    $actitud = $_POST['actitud'];
    $nombre = $_POST['nombre'];


    $sql = "INSERT INTO calificacion_docente(docente,student,result_conocimiento,result_actitud) 
    VALUES(
        '$nombre',
        '$id',
        '$conocimiento',
        '$actitud'
    )";

    $sqlinsertar = mysqli_query($conexion,$sql);

    if($sqlinsertar){
        echo '<script language="javascript">alert("Se Califico con exito!");window.location.href="../Especialistas/calificar.php"</script>';

    }else{
        echo '<script language="javascript">alert("Error no se pudo grabar la calificacion!");window.location.href="../Especialistas/calificar.php"</script>';
    }


?>