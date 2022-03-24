<?php
    require 'conexion.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $document = $_POST['document'];
    $state = $_POST['state'];
    $id_ins = $_POST['id_institution'];
    $type = $_POST['type_vinc'];
    $type_teacher = $_POST['type_teacher'];
    $type_pro = $_POST['type_prog'];
    $email = $_POST['email'];
    $observation = $_POST['observation'];
    $phone = $_POST['phone'];
    $calification = $_POST['calification'];
    $studen = $_POST['students'];

    $dir_subida = '../uploads/especialistas/fotos/';
    $file = $dir_subida . basename($_FILES['file']['name']);

    if($file == "../uploads/especialistas/fotos/"){

    $sql = mysqli_query($conexion, "UPDATE docentes SET 
                                        name = '$name',
                                        document = '$document',
                                        state = '$state',
                                        type_vinc = '$type',
                                        type_servi = '$type_teacher',
                                        phone = '$phone',
                                        email = '$email',
                                        type_prog = '$type_pro',
                                        observation = '$observation',
                                        calification = '$calification' ,
                                        institucion_asociada = '$id_ins',
                                        tiene_estudiantes = '$studen'
                                        WHERE document = '$document'
                                        ");
    }else{
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
            $sql = mysqli_query($conexion, "UPDATE docentes SET 
                                        name = '$name',
                                        document = '$document',
                                        state = '$state',
                                        type_vinc = '$type' ,
                                        type_servi = '$type_teacher',
                                        phone = '$phone',
                                        email = '$email',
                                        type_prog = '$type_pro',
                                        observation = '$observation',
                                        calification = '$calification',
                                        foto = '$file' ,
                                        institucion_asociada = '$id_ins',
                                        tiene_estudiantes = '$studen'
                                        WHERE document = '$document' 
                                        ");
        }
    }

    echo $sql;

    
    if(!$sql){
        echo '<script language="javascript">alert("Error, no se Actualizo Verifique nuevamente");window.location.href="../Administrator/register_teachers.php"</script>';
    }else{
        echo '<script language="javascript">alert("Exito, se Actualizo Correctamente");window.location.href="../Administrator/register_teachers.php"</script>';
    }

?>