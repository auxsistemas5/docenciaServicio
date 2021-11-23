<?php

require 'conexion.php';

$id = $_POST['id_institucion'];
$name = strtoupper($_POST['name']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = strtoupper($_POST['position']);

$query = "INSERT INTO instituciones_contacto(id_institucion,name,position,phone,email)
        VALUES (
            '$id',
            '$name',
            '$position',
            '$phone',
            '$email'
        )";

$result = mysqli_query($conexion,$query);
//$r = mysqli_fetch_array($result);


if($result > 0){
    echo '<script language="javascript">alert("Se ingreso con exito el contacto");window.location.href="../Administrator/view_registers_institution.php"</script>';
}else{
    echo '<script language="javascript">alert("Error, no se pudo procesar el registro");window.location.href="../Administrator/view_registers_institution.php"</script>';
}


?>