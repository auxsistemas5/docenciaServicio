<?php

    require 'conexion.php';
    $id_sem = $_POST['id_seminar'];
    $ques = $_POST['question'];
    $ans = $_POST['answer'];
    $pro = $_POST['program'];

    $sql = "INSERT INTO preguntas(id_seminar,question,answer,program) VALUES(
        '$id_sem',
        '$ques',
        '$ans',
        '$pro'
    )";

    $consulta = mysqli_query($conexion,$sql);

    if(!$consulta){
        echo '<script language="javascript">alert("Error, no se pudo procesar el registro");window.location.href="../Administrator/elaborate_questions.php"</script>';
    }else{
        echo '<script language="javascript">alert("Exito, creado correctamente");window.location.href="../Administrator/elaborate_questions.php"</script>';
    }

?>