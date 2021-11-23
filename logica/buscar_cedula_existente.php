<?php
require '../logica/conexion.php';
session_start();

$document = $_POST['document'];

$query = "SELECT document FROM usuarios WHERE document = '$document'";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

//echo $array[0];

if($array[0] > 0){
    echo '<script language="javascript">alert("El documento ya existe");window.location.href="../Administrator/register_estudiantes.php"</script>';
}else{
    echo '<script language="javascript">alert("El documento aun no ha sido ingresado");window.location.href="../Administrator/register_estudiantes.php"</script>';
}
?>