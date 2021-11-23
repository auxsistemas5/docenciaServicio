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

$consulta = "INSERT INTO instituciones(name,acronym,agreement,finish_agreement,phone,nit,direction,programs,campus) 
            VALUES (
                '$name',
                '$acronym',
                '$agreement',
                '$finish',
                '$phone',
                '$nit',
                '$direction',
                '$programs',
                '$campus'
            )";

$result = mysqli_query($conexion,$consulta);


if(!$result){
    echo '<script language="javascript">alert("Error, no se creo Verifique nuevamente");window.location.href="../Administrator/register_institution.php"</script>';
}else{
    echo '<script language="javascript">alert("Se Creo Usuario con exito");window.location.href="../Administrator/register_institution.php"</script>';
}

?>)