<?php
require 'conexion.php';
session_start();

$document = $_POST['document'];
$password = $_POST['password'];


$query = "SELECT * FROM usuarios WHERE document = '$document' AND password = '$password' ";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

$query2 = "SELECT * FROM administrador WHERE document = '$document' AND password = '$password' ";
$consulta2 = mysqli_query($conexion,$query2);
$array2 = mysqli_fetch_array($consulta2);


if($array > 0){
    $_SESSION['username'] = $array[1];
    $_SESSION['document'] = $array[2];
    $_SESSION['type_user'] = $array[4];
    $_SESSION['state'] = $array[5];
    
    if($array[5] != 0){
        echo '<script language="javascript">alert("Ingreso con Exito");window.location.href="../Students/dashboard.php"</script>';
    }else{
        echo '<script language="javascript">alert("Error deshabilitado parce que su usuario esta desabilitado);window.location.href="../index.php"</script>';
    }

}else if ($array2 > 0){
    $_SESSION['username'] = $array2[1];
    $_SESSION['document'] = $array2[2];
    $_SESSION['state'] = $array2[4];

    if($_SESSION['state'] == 1){
        echo '<script language="javascript">alert("Ingreso con Exito");window.location.href="../Administrator/dashboard.php"</script>';

    }else if($_SESSION['state'] == 0){
        
        echo '<script language="javascript">alert("Usuario Deshabilitado");window.location.href="../index.php"</script>';
    }
}else{
    echo '<script language="javascript">alert("Error, no se pudo acceder ");window.location.href="../index.php"</script>';

}



?>