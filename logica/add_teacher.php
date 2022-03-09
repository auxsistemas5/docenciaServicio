<?php

    require 'conexion.php';

    $name = strtoupper($_POST['name']);
    $document = $_POST['document'];
    $i_in =  $_POST['id_institution'];
    $inicio =  $_POST['start'];
    $fin = $_POST['end'];
    $type = $_POST['type_vinc'];
    $type_service = $_POST['type_teacher'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $type_prog = $_POST['type_prog'];
    $observation = $_POST['observation'];
    $calification = $_POST['calification'];

    $dir_subida = '../uploads/especialistas/fotos/';
    $file = $dir_subida . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {


    $sql = "INSERT INTO docentes(name,document,id_institution,start,end,type_vinc,type_servi,phone,email,type_prog,observation,calification, foto) VALUES (
        '$name',
        '$document',
        '$i_in',
        '$inicio',
        '$fin',
        '$type',
        '$type_service',
        '$phone',
        '$email',
        '$type_prog',
        '$observation',
        '$calification',
        '$file'
     )";

    $response = mysqli_query($conexion,$sql);
    
    if(!$response){
        echo '<script language="javascript">alert("Error, No se creo el docente");window.location.href="../Administrator/register_teachers.php"</script>';
    }else{
        echo '<script language="javascript">alert("Se creo el Docente con exito!");window.location.href="../Administrator/register_teachers.php"</script>';
    }

}else{
    echo '<script language="javascript">alert("Error, No se creo el docente error al subir la foto");window.location.href="../Administrator/register_teachers.php"</script>';
}




?>