<?php

    require '../logica/conexion.php';
    $name = $_POST['programa'];

    $mes = date("n");

    if($mes == 1){
        $mesA = "ENERO";
    }else if($mes == 2){
        $mesA = "FEBRERO";
    }else if($mes == 3){
        $mesA = "MARZO";
    }elseif ($mes == 4) {
        $mesA = "ABRIL";
    }elseif ($mes == 5) {
        $mesA = "MAYO";
    }elseif ($mes == 6) {
        $mesA = "JUNIO";
    }else if($mes == 7){
        $mesA = "JULIO";
    }else if($mes == 8){
        $mesA = "AGOSTO";
    }else if($mes == 9){
        $mesA = "SEPTIEMBRE";
    }elseif ($mes == 10) {
        $mesA = "OCTUBRE";
    }elseif ($mes == 11) {
        $mesA = "NOVIEMBRE";
    }elseif ($mes == 12) {
        $mesA = "DICIEMBRE";
    }

    $sqlPro = "SELECT * FROM examen WHERE month = '$mesA' AND program = '$name' ";

    $consultaPro = mysqli_query($conexion,$sqlPro);
    $resPro = mysqli_fetch_array($consultaPro);

    $nombre = $_SESSION['username'];

    //esta consulta permite validar si el estudiante ya hizo el examen
    $sqlValidacionExamen = "SELECT * FROM resultados WHERE student = '$nombre' ";
    $BuscarRegistro = mysqli_query($conexion,$sqlValidacionExamen);
    $resultadoBuscar = mysqli_fetch_array($BuscarRegistro);


    if($resultadoBuscar > 0 and $resultadoBuscar != null){
        echo '<script language="javascript">alert("Usted Ya ha finalizado su Examen");window.location.href="../Students/list_exam.php"</script>';
    }else if($resultadoBuscar < 1 and $resultadoBuscar != null){

        if($consultaPro and $consultaPro != null){
            if($resPro['state'] == 0){
                echo '<script language="javascript">alert("Aun no se ha Activado el Examen");window.location.href="../Students/list_exam.php"</script>';
            }else if($resPro['state'] == 1){
                echo '<script language="javascript">alert("Bienvenido al Examen recuerde que tiene solo 30 MINUTOS para realizarlo Mucha Suerte");"</script>';
                require 'partials/_res_exam.php';
            }
        }else{
            echo '<script language="javascript">alert("Error, el examen solicitado no existe");window.location.href="../Students/list_exam.php"</script>';
        }
    }else{
        if($resPro['state'] == 0){
            echo '<script language="javascript">alert("Aun no se ha Activado el Examen");window.location.href="../Students/list_exam.php"</script>';
        }else if($resPro['state'] == 1){
            echo '<script language="javascript">alert("Bienvenido al Examen recuerde que tiene solo 30 MINUTOS para realizarlo Mucha Suerte");"</script>';
            require 'partials/_res_exam.php';
        }
    }



?>