<?php
    require 'conexion.php';
    session_start();

    $id = $_POST['id'];
    $username = $_POST['username'];
    $document = $_POST['document'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $id_institucion = $_POST['id_institucion'];
    $position = $_POST['position'];
    $formation = $_POST['formation'];
    $email = $_POST['email'];
    $anexo = $_POST['anexo'];

    $consulta = mysqli_query($conexion, "UPDATE usuarios SET 
                    username = '$username', 
                    document = '$document',
                    state = '$state',
                    phone = '$phone',
                    id_institucion = '$id_institucion',
                    position = '$position',
                    formation = '$formation',
                    email = '$email',
                    anexo = '$anexo' WHERE id = '$id'
                    ");
    
    

    if(!$consulta){
        echo '<script language="javascript">alert("Error, no se Actualizo Verifique nuevamente");window.location.href="../Administrator/register_estudiantes.php"</script>';
    }else{
        echo '<script language="javascript">alert("Se Actualizo Usuario con exito");window.location.href="../Administrator/register_students.php"</script>';
    }

?>