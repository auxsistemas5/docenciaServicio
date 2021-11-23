<?php
    require 'conexion.php';

    
    $user = $_POST['id_user'];
    $typeD = $_POST['type_document'];

    if($_POST['type_document'] == 'hojadevida'){
        $dir_subida = '../uploads/estudiantes/hojadevida/';

    }else if($_POST['type_document'] == 'eps'){
        $dir_subida = '../uploads/estudiantes/eps/';

    }else if($_POST['type_document'] == 'arl'){
        $dir_subida = '../uploads/estudiantes/arl/';

    }else if($_POST['type_document'] == 'vacunas'){
        $dir_subida = '../uploads/estudiantes/vacunas/';

    }else if($_POST['type_document'] == 'anticuerpos'){
        $dir_subida = '../uploads/estudiantes/anticuerpos/';

    }else if($_POST['type_document'] == 'poliza'){
        $dir_subida = '../uploads/estudiantes/poliza/';

    }else if($_POST['type_document'] == 'documento'){
        $dir_subida = '../uploads/estudiantes/documentos/';

    }else if($_POST['type_document'] == 'adicional'){
        $dir_subida = '../uploads/estudiantes/adicional/';

    }else if($_POST['type_document'] == 'certificado'){
        $dir_subida = '../uploads/estudiantes/certificados/';
    }
    
    
    $file = $dir_subida . basename($_FILES['file']['name']);
    
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
        

            $queryD = "INSERT INTO documentosestudiantes(id_user,file,type_document)
                        VALUES(
                            '$user',
                            '$file',
                            '$typeD'

                        )";

                    $insert = mysqli_query($conexion,$queryD);
                    
            if(!$insert){
                echo '<script language="javascript">alert("Error, no se creo Verifique nuevamente");window.location.href="../Administrator/register_students.php"</script>';
            }else{
                echo '<script language="javascript">alert("Se Subio con exito");window.location.href="../Administrator/register_students.php"</script>';
            }

                                
        
    } else {

        echo "¡Posible ataque de subida de ficheros!\n";
    }
    
    
    print "</pre>";
    
    
?>

        
            


    
    




?>