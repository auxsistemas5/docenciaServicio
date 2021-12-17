<?php
    require 'conexion.php';

    $name = $_POST['name'];
    $service = $_POST['id_service'];

    $sql = "INSERT INTO seminario(name,id_service) VALUES(
        '$name',
        '$service'
    )";

    $res = mysqli_query($conexion,$sql);

    if($res){
        echo '<script language="javascript">alert("Se Creo con exito");window.location.href="../Administrator/register_seminar.php"</script>';
    }else{
        echo '<script language="javascript">alert("Error,No se Creo,Verifique nuevamente");window.location.href="../Administrator/register_seminar"</script>';
    }




?>