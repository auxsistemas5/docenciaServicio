<?php
    require 'conexion.php';

    $nombre = $_POST['nombre'];

    $sqlVerificarNombre = "SELECT * FROM usuarios where document = $nombre ";
    $sqlnum = mysqli_query($conexion, $sqlVerificarNombre);
    $sqlUser = mysqli_fetch_array($sqlnum);
    $name = $sqlUser['username']; 
    $documento = $sqlUser['document'];

    $sql = "SELECT * FROM calificacion_docente WHERE student = '$name' ";
    $sqlverificar = mysqli_query($conexion,$sql);

    if($sqlverificar){
        while($datosUser = mysqli_fetch_array($sqlverificar)){
            ?>
                <tr>
                    <td><?php echo $name?></td>
                    <td><?php echo $documento?></td>
                    <td><?php echo $datosUser['docente'] ?></td>
                    <td><?php echo $datosUser['mes_calificado'] ?></td>
                    <td><?php echo $datosUser['result_conocimiento'] ?></td>
                    <td><?php echo $datosUser['result_actitud'] ?></td>
                    <td><?php echo $datosUser['result_seminario'] ?></td>
                    <td><?php echo $datosUser['observacion'] ?></td>
                </tr>
            <?php
        }
    }
?>