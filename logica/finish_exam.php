<?php
    require 'conexion.php';

    $respuesta = $_POST['respuesta'];
    $pregunta = $_POST['question'];
    $correcta = $_POST['correcta'];
    $nombre = $_POST['student'];

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
 
    $i = 0;
    $buenas = 0;
    $malas = 0;
    while($i < 4){
        if($respuesta[$i] == $correcta[$i]){
            $buenas++;
        }else{
            $malas++;
        }
        $i++;
    }

    $num_respuestas = $buenas + $malas;
    $resultado = $buenas * 5 / 5; 


    //echo $resultado;
    //echo $nombre;
    //echo $pregunta[0];
    //echo $pregunta[1];
    //echo $respuesta[0]."\n";
    //echo $respuesta[1]."\n";
    //echo $correcta[0];
    //echo $correcta[1];

    $sql = "INSERT INTO resultados(student,result,month) VALUES
    (
        '$nombre',
        '$resultado',
        '$mesA'
    )";

    $insercion = mysqli_query($conexion,$sql);

    if($insercion){
        echo '<script language="javascript">alert("Examen Finalizado Con Exito");window.location.href="../Students/list_exam.php"</script>';
    }else{

    }


?>