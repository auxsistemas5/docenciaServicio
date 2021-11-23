<?php
    require 'conexion.php';

    $id = $_POST['id_user'];
    $admission = $_POST['admission_date'];
    $finish = $_POST['finish_date'];
    $program = $_POST['id_program'];
    $service = $_POST['id_service'];
    $teacher = strtoupper($_POST['teacher']);
    $type = strtoupper($_POST['type_teacher']);
    $observations = strtoupper($_POST['observations']);

    if($_POST['finish_date'] == ""){
        $finish = "";
    }

    if($_POST['teacher'] == ""){
        $teacher = "";
    }
    if($_POST['observations'] == ""){
        $observations = "";
    }


    $consult = "INSERT INTO registro(id_user ,admission_date ,finish_date ,id_program ,id_service ,teacher,type_teacher,observations) VALUES ('$id',
                    '$admission',
                    '$finish',
                    '$program',
                    '$service',
                    '$teacher',
                    '$type',
                    '$observations'
                        )";

    $ejecutar = mysqli_query($conexion,$consult);

    if(!$ejecutar){
        echo '<script language="javascript">alert("Error, no se pudo procesar el registro");window.location.href="../Administrator/register_students.php"</script>';
    }else if($ejecutar){
        echo '<script language="javascript">alert("Se Creo el registro con exito");window.location.href="../Administrator/register_students.php"</script>';
    }

?>