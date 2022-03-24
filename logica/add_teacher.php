<?php

    require 'conexion.php';

    $name = strtoupper($_POST['name']);
    $document = $_POST['document'];
    $type = $_POST['type_vinc'];
    $type_service = $_POST['type_teacher'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $type_prog = $_POST['type_prog'];
    $observation = $_POST['observation'];
    $calification = $_POST['calification'];
    $insti = $_POST['id_institucion'];
    $students = $_POST['tiene_estudiantes'];

    $dir_subida = '../uploads/especialistas/fotos/';
    $file = $dir_subida . basename($_FILES['file']['name']);

if($file == "../uploads/especialistas/fotos/"){

    $sql = "INSERT INTO docentes(name,document,type_vinc,type_servi,phone,email,type_prog,observation,calification, foto, institucion_asociada, tiene_estudiantes) VALUES (
        '$name',
        '$document',
        '$type',
        '$type_service',
        '$phone',
        '$email',
        '$type_prog',
        '$observation',
        '$calification',
        '$file',
        '$insti',
        '$students'
     )";

    $response = mysqli_query($conexion,$sql);
    
    if(!$response){
        echo '<script language="javascript">alert("Error, No se creo el docente");window.location.href="../Administrator/register_teachers.php"</script>';
    }else{
        echo '<script language="javascript">alert("Se creo el Docente con exito!");window.location.href="../Administrator/register_teachers.php"</script>';
    }

}else{

    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
    
    
        $sql = "INSERT INTO docentes(name,document,type_vinc,type_servi,phone,email,type_prog,observation,calification, foto, institucion_asociada, tiene_estudiantes) VALUES (
            '$name',
            '$document',
            '$type',
            '$type_service',
            '$phone',
            '$email',
            '$type_prog',
            '$observation',
            '$calification',
            '$file',
            '$insti',
            '$students'
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
}





?>