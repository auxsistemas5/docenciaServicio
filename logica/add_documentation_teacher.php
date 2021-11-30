<?php
    require 'conexion.php';
    
    $user = $_POST['id_docente'];
    $typeD = $_POST['type_file'];
    $dir_subida = '../uploads/docentes/';
    $file = $dir_subida . basename($_FILES['file']['name']);
        
        
    echo '<pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
        

            $queryD = "INSERT INTO documentos_docentes(id_docente,file,type_file)
                        VALUES(
                            '$user',
                            '$file',
                            '$typeD'

                        )";

                    $insert = mysqli_query($conexion,$queryD);
                    
            if(!$insert){
                echo '<script language="javascript">alert("Error, no se Subio Verifique nuevamente");window.location.href="../Administrator/view_registers_institution.php"</script>';
            }else{
                echo '<script language="javascript">alert("Se Subio con exito");window.location.href="../Administrator/view_registers_institution.php"</script>';
            }

                                
        
    } else {

        echo "¡Posible ataque de subida de ficheros!\n";
    }


    print "</pre>";



?>