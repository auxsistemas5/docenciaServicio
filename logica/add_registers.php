<?php
    require 'conexion.php';

    $id = $_POST['id_user'];
    $admission = $_POST['admission_date'];
    $finish = $_POST['finish_date'];
    $program = $_POST['id_program'];
    $service = $_POST['id_service'];
    $teacher = strtoupper($_POST['teacher']);
    $type = strtoupper($_POST['type_teacher']);
    $observation = strtoupper($_POST['observation']);

    if($_POST['finish_date'] == ""){
        $finish = "";
    }

    if($_POST['admission_date'] == ""){
        $admission = "";
    }

    if($_POST['type_teacher'] == ""){
        $type = "";
    }


    if($_POST['teacher'] == ""){
        $teacher = "";
    }
    if($_POST['observation'] == ""){
        $observation = "N/A";
    }


    $consult = "INSERT INTO registro(id_user ,admission_date ,finish_date ,id_program ,id_service ,teacher,type_teacher,observation) VALUES ('$id',
                    '$admission',
                    '$finish',
                    '$program',
                    '$service',
                    '$teacher',
                    '$type',
                    '$observation'
                        )";

    $ejecutar = mysqli_query($conexion,$consult);

    if(!$ejecutar){
        echo '<script language="javascript">alert("Error, no se pudo procesar el registro");window.location.href="../Administrator/register_students.php"</script>';
    }else if($ejecutar){
        echo '<script language="javascript">alert("Se Creo el registro con exito");window.location.href="../Administrator/register_students.php"</script>';
    }

?>