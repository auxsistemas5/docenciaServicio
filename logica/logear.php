<?php
require 'conexion.php';
session_start();

$document = $_POST['document'];
$password = $_POST['password'];


$query = "SELECT * FROM usuarios WHERE document = '$document' AND password = '$password' ";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

if($array > 0 ){
    $_SESSION['username'] = $array[1];
    $_SESSION['document'] = $array[2];
    $_SESSION['type_user'] = $array[4];
    $_SESSION['state'] = $array[5];
    if($_SESSION['type_user'] == 1 ){
        if($_SESSION['state'] == 1){
            echo '<script language="javascript">alert("Ingreso con Exito");window.location.href="../Administrator/dashboard.php"</script>';
        }else{
            
            echo '<script language="javascript">alert("Ingreso con Exito");window.location.href="../index.php"</script>';
        }
    }else if($_SESSION['type_user'] == 2){
        if($_SESSION['state'] == 1){
            echo '<script language="javascript">alert("Ingreso con Exito");window.location.href="../Students/dashboard.php"</script>';
        }else{
            echo '<script language="javascript">alert("Error Usuario Inhabilitado");window.location.href="../index.php"</script>';
        }
    }else{
        echo '<script language="javascript">alert("Error");window.location.href="../index.php"</script>';
    }
}else{
    echo '<script language="javascript">alert("Error de autentificacion, Verifique Nuevamente");window.location.href="../index.php"</script>';
}

?>