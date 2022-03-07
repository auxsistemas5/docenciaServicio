<?php

include 'conexion.php';

$name =  strtoupper($_POST['name']);
$acronym =  strtoupper($_POST['acronym']);
$agreement = $_POST['agreement'];
$finish = $_POST['finish_agreement'];
$phone = $_POST['phone'];
$nit = $_POST['nit'];
$direction =  strtoupper($_POST['direction']);
$programs = strtoupper( $_POST['programs']);
$campus =  strtoupper($_POST['campus']);
$dir_subida = '../uploads/instituciones/logo/';
$file = $dir_subida . basename($_FILES['file']['name']);


if(move_uploaded_file($_FILES['file']['tmp_name'], $file)) {

    $consulta = "INSERT INTO instituciones(name,acronym,agreement,finish_agreement,phone,nit,direction,programs,campus, logo) 
            VALUES (
                '$name',
                '$acronym',
                '$agreement',
                '$finish',
                '$phone',
                '$nit',
                '$direction',
                '$programs',
                '$campus',
                '$file'
            )";
    

    $result = mysqli_query($conexion,$consulta);


    if(!$result){
        echo '<script language="javascript">alert("Error, no se creo Verifique nuevamente");window.location.href="../Administrator/register_institution.php"</script>';
    }else{
        echo '<script language="javascript">alert("Se Creo Usuario con exito");window.location.href="../Administrator/register_institution.php"</script>';
    }

}else{
    echo '<script language="javascript">alert("ERROR, no se ha podido subir el logo intentelo nuevamente");window.location.href="../Administrator/register_institution.php"</script>';
}
?>