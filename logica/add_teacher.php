<?php

    require 'conexion.php';

    $name = strtoupper($_POST['name']);
    $document = $_POST['document'];
    $i_in =  $_POST['id_institution'];
    $inicio =  $_POST['start'];
    $fin = $_POST['end'];
    $type = $_POST['type_vinc'];
    $type_teacher = $_POST['type_teacher'];

    $sql = "INSERT INTO docentes(name,document,id_institution,start,end,type_vinc,type_teacher) VALUES (
        '$name',
        '$document',
        '$i_in',
        '$inicio',
        '$fin',
        '$type',
        '$type_teacher'
     )";

    $response = mysqli_query($conexion,$sql);
    echo $response;

    if(!$response){
        echo "no se ingreso";
    }else{
        echo "se ingreso con exito";
    }




?>