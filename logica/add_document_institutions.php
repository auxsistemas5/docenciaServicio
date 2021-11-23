<?php
    require 'conexion.php';

    $user = $_POST['id_institucion'];
    $typeD = $_POST['type_file'];

    if($_POST['type_file'] == 'convenio'){
        $dir_subida = '../uploads/instituciones/convenios/';

    }else if($_POST['type_file'] == 'anexo_tecnico'){
        $dir_subida = '../uploads/instituciones/anexos/';

    }else if($_POST['type_file'] == 'certificado_existencial'){
        $dir_subida = '../uploads/instituciones/certificado/';

    }else if($_POST['type_file'] == 'autorizacion'){
        $dir_subida = '../uploads/instituciones/autorizacion/';

    }else if($_POST['type_file'] == 'cedula'){
        $dir_subida = '../uploads/instituciones/documentos/';

    }else if($_POST['type_file'] == 'aprobacion'){
        $dir_subida = '../uploads/instituciones/aprobacion/';

    }else if($_POST['type_file'] == 'poliza'){
        $dir_subida = '../uploads/instituciones/polizas/';

    }else if($_POST['type_file'] == 'reglamento'){
        $dir_subida = '../uploads/instituciones/reglamentos/';

    }else if($_POST['type_file'] == 'estatuto_docente'){
        $dir_subida = '../uploads/instituciones/estatutos/';

    }else if($_POST['type_file'] == 'bioseguridad'){
        $dir_subida = '../uploads/instituciones/bioseguridad/';

    }else if($_POST['type_file'] == 'contraprestacion'){
        $dir_subida = '../uploads/instituciones/contraprestaciones/';
    }

    $file = $dir_subida . basename($_FILES['file']['name']);
        
        
    echo '<pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
        

            $queryD = "INSERT INTO documentos_instituciones(id_institucion,file,type_file)
                        VALUES(
                            '$user',
                            '$file',
                            '$typeD'

                        )";

                    $insert = mysqli_query($conexion,$queryD);
                    
            if(!$insert){
                echo '<script language="javascript">alert("Error, no se creo Verifique nuevamente");window.location.href="../Administrator/view_registers_institution.php"</script>';
            }else{
                echo '<script language="javascript">alert("Se Subio con exito");window.location.href="../Administrator/view_registers_institution.php"</script>';
            }

                                
        
    } else {

        echo "¡Posible ataque de subida de ficheros!\n";
    }


    print "</pre>";
    

?>