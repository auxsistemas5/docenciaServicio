<?php
    require 'conexion.php';
    $calificacion = $_POST['seminario'];
    $fecha = $_POST['mes_calificado'];
    $id_user = $_POST['id_user'];

    $verificar = "SELECT username FROM usuarios WHERE id = '$id_user' ";
    $consultar = mysqli_query($conexion,$verificar);
    


    if(!$consultar){
        echo '<script language="javascript">alert("No Se pudo Calificar");window.location.href="../Administrator/calificacion_docencia.php"</script>';
    }else{

        $dato = mysqli_fetch_array($consultar);
        $nombre = $dato['username'];

        $sql = "INSERT INTO calificacion_docencia(id_user,result_seminario,mes_calificado,student) VALUES(
            '$id_user',
            '$calificacion',
            '$fecha',
            '$nombre'
        ) ";
    
        $sql = mysqli_query($conexion,$sql);
    
        if($sql){
            echo '<script language="javascript">alert("Se Califico con exito!");window.location.href="../Administrator/calificacion_docencia.php"</script>';
        }
    }



?>