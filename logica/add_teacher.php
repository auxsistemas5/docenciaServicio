<?php

    require 'conexion.php';

    $name = strtoupper($_POST['name']);
    $document = $_POST['document'];
    $i_in =  $_POST['id_institution'];
    $inicio =  $_POST['start'];
    $fin = $_POST['end'];
    $type = $_POST['type_vinc'];
    $type_teacher = $_POST['type_teacher'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $type_prog = $_POST['type_prog'];
    $observation = $_POST['observation'];
    $calification = $_POST['calification'];

    $sql = "INSERT INTO docentes(name,document,id_institution,start,end,type_vinc,type_teacher,phone,email,type_prog,observation,calification) VALUES (
        '$name',
        '$document',
        '$i_in',
        '$inicio',
        '$fin',
        '$type',
        '$type_teacher',
        '$phone',
        '$email',
        '$type_prog',
        '$observation',
        '$calification'
     )";

    $response = mysqli_query($conexion,$sql);
    

    if(!$response){
        echo '<script language="javascript">alert("Error, No se creo el docente");window.location.href="../Administrator/register_teachers.php"</script>';
    }else{
        echo '<script language="javascript">alert("Se creo el Docente con exito!");window.location.href="../Administrator/register_teachers.php"</script>';
    }




?>