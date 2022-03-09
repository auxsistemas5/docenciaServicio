<?php

    require 'conexion.php';
    session_start();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $acro = $_POST['acronym'];
    $nit = $_POST['nit'];
    $direction = $_POST['direction'];
    $phone = $_POST['phone'];
    $programs = $_POST['programs'];
    $agree  =$_POST['agreement'];
    $finish  =$_POST['finish_agreement'];
    $campus  =$_POST['campus'];

    $dir_subida = '../uploads/instituciones/logo/';
    $file = $dir_subida . basename($_FILES['file']['name']);

    if($file == "../uploads/instituciones/logo/"){
        $query = mysqli_query($conexion, "UPDATE instituciones   SET 
                            name = '$name', 
                            acronym = '$acro',
                            agreement = '$agree',
                            finish_agreement = '$finish',
                            phone = '$phone',
                            nit = '$nit',
                            direction = '$direction',
                            programs = '$programs',
                            campus = '$campus' WHERE id = '$id'
                            ");
    }else{
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
            $query = mysqli_query($conexion, "UPDATE instituciones   SET 
                            name = '$name', 
                            acronym = '$acro',
                            agreement = '$agree',
                            finish_agreement = '$finish',
                            phone = '$phone',
                            nit = '$nit',
                            direction = '$direction',
                            programs = '$programs',
                            campus = '$campus',
                            logo = '$file' WHERE id = '$id'
                            ");
        }
    }

    if(!$query){
        echo '<script language="javascript">alert("Error, no se Actualizo Verifique nuevamente");window.location.href="../Administrator/view_registers_institution.php"</script>';
    }else{
        echo '<script language="javascript">alert("Se Actualizo Institucion con exito");window.location.href="../Administrator/view_registers_institution.php"</script>';
    }

?>