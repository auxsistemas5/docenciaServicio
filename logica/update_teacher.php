<?php
    require 'conexion.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $document = $_POST['document'];
    $inicio = $_POST['start'];
    $final = $_POST['end'];
    $state = $_POST['state'];
    $id_ins = $_POST['id_institution'];
    $type = $_POST['type_vinc'];
    $type_teacher = $_POST['type_teacher'];
    $type_pro = $_POST['type_prog'];
    $email = $_POST['email'];
    $observation = $_POST['observation'];
    $phone = $_POST['phone'];
    $calification = $_POST['calification'];

    $sql = mysqli_query($conexion, "UPDATE docentes SET 
                                        name = '$name',
                                        document = '$document',
                                        id_institution =  '$id_ins',
                                        state = '$state',
                                        start = '$inicio',
                                        end = '$final',
                                        type_vinc = '$type' ,
                                        type_teacher = '$type_teacher',
                                        phone = '$phone',
                                        email = '$email',
                                        type_prog = '$type_pro',
                                        observation = '$observation',
                                        calification = '$calification' WHERE document = $document
                                        ");
    
    echo $sql;
    if(!$sql){
        echo '<script language="javascript">alert("Error, no se Actualizo Verifique nuevamente");window.location.href="../Administrator/register_teachers.php"</script>';
    }else{
        echo '<script language="javascript">alert("Exito, se Actualizo Correctamente");window.location.href="../Administrator/register_teachers.php"</script>';
    }





?>