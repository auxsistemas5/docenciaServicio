<?php

    require 'conexion.php';

    $month = $_POST['month'];
    $name_seminario = $_POST['name_seminars'];
    $num_preguntas = $_POST['num_question'];
    $program = $_POST['program'];
    
    $verification = "SELECT examen.month,examen.name_seminars FROM examen 
    WHERE examen.month = '$month' AND examen.name_seminars = '$name_seminario' ";

    $validacion = mysqli_query($conexion,$verification);
    $res = mysqli_fetch_array($validacion);

    if($res == null ){

        $sql = "INSERT INTO examen(month,name_seminars,num_question,program) VALUES(
            '$month',
            '$name_seminario',
            '$num_preguntas',
            '$program'
        )";
        $res = mysqli_query($conexion,$sql);
    
        if($res){
            echo '<script language="javascript">alert("Se crearon las preguntas con Exito");window.location.href="../Administrator/elaborate_exam.php"</script>';
        }else{
            echo '<script language="javascript">alert("Error, no se creo");window.location.href="../Administrator/elaborate_exam.php"</script>';
        }

    }else if($res[0] != null ){
        
        echo '<script language="javascript">alert("Error, ya existe preguntas para el seminario");window.location.href="../Administrator/elaborate_exam.php"</script>';
        
    }



   
    

   



    



?>