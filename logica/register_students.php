<?php
    require 'conexion.php';
    

    $username = strtoupper($_POST['username']);
    $document =strtoupper( $_POST['document']);
    $password = strtoupper( $_POST['password']);
    $phone = strtoupper( $_POST['phone']);
    $id_institucion = strtoupper( $_POST['id_institucion']);
    $position = strtoupper( $_POST['position']);
    $formation = strtoupper( $_POST['formation']);
    $email = strtoupper( $_POST['email']);
    $anexo = strtoupper( $_POST['anexo']);
    
    //$admision = $_POST['admission_date'];
    //$finish = $_POST['finish_date'];
    $verificacion = "SELECT document FROM usuarios WHERE document = '$document' ";
    $execute = mysqli_query($conexion, $verificacion);
    $row = mysqli_fetch_array($execute);

    if($row[0] != $document){

        $consulta = "INSERT INTO usuarios(username,document,password,phone,id_institucion,position,formation,email,anexo) 
                        VALUES ('$username',
                                '$document',
                                '$password',
                                '$phone',
                                '$id_institucion',
                                '$position',
                                '$formation',
                                '$email',
                                '$anexo'
                                    )";
    
        $ejecutar = mysqli_query($conexion,$consulta);
        //$verFilas = mysqli_fetch_array($ejecutar,$consulta);
    
        if(!$ejecutar){
            echo '<script language="javascript">alert("Error, no se creo Verifique nuevamente");window.location.href="../Administrator/register_students.php"</script>';
        }else{
            echo '<script language="javascript">alert("Se Creo Usuario con exito");window.location.href="../Administrator/register_students.php"</script>';
        }
    }else{
        echo '<script language="javascript">alert("Error no se creo documento duplicado");window.location.href="../Administrator/register_students.php"</script>';
    }
    
?>