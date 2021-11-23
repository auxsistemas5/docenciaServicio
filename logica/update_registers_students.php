<?php
    require 'conexion.php';
    

    $id = $_POST['id'];
    $program = $_POST['programs_name'];
    $service = $_POST['services_name'];
    $admission = $_POST['admission_date'];
    $finish = $_POST['finish_date'];

    $sql = "UPDATE registro SET
            programs_name = '$program',
            services_name = '$service',
            admision_date = '$admission',
            finish_date = '$finish' WHERE id = '$id'
    ";
    $res = mysqli_query($conexion,$sql);

    if($sql > 0){
        echo '<script language="javascript">alert("se Actualizo Exitosamente");window.location.href="../Administrator/view_registers_students.php"</script>';
    }else{
        echo '<script language="javascript">alert("No se Actualizo Verifique nuevamente");window.location.href="../Administrator/view_registers_students.php"</script>';
    }





?>