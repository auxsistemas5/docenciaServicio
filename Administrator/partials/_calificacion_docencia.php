<?php   
    require '../logica/conexion.php';

    $sql = "SELECT registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,usuarios.email, usuarios.photo,registro.finish_date,servicios.services_name FROM registro INNER JOIN usuarios ON usuarios.id = registro.id_user INNER JOIN servicios ON servicios.id = registro.id_service WHERE usuarios.position = 'INTERNO' AND registro.anulated = 0 AND registro.finish_date BETWEEN '2022-05-01' AND '2022-05-31' ORDER BY registro.admission_date";

    $sqlver = mysqli_query($conexion,$sql);

?>

<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h3>CALIFICAR ESTUDIANTES</h3>
        </div>
        <div class="table-responsive">

            <div class="card-body">
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>FOTO</th>
                            <th>FECHA FINALIZO</th>
                            <th>SERVICIO</th>
                            <th>SEMINARIO</th>
                            <th>ACCIONES</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($datos = mysqli_fetch_array($sqlver)){
                                $id = $datos['id'];
                                $fechaFn = $datos['finish_date'];
                                $sqlRevisarResultados = "SELECT id_user,mes_calificado FROM calificacion_docencia WHERE id_user = '$id' and mes_calificado = '$fechaFn'  "; 
                                $result = mysqli_query($conexion,$sqlRevisarResultados);
                                $persona = mysqli_fetch_array($result);
                                if($persona > 0 ){
                                    //echo $sqlRevisarResultados;
                                }else{

                                    ?>
                                        <tr>
                                            <form action="../logica/add_calification_docencia.php" method="POST">
                                                
                                                <td><?php echo $datos['username'] ?></td>
                                                <td><img src="<?php echo $datos['photo'] ?>" width='120px' height='120px'></td>
                                                <td><?php echo $datos['finish_date']?>
                                                <input hidden type="text" name='mes_calificado' value="<?php echo $datos['finish_date']?>"></td>
                                                <td hidden><input hidden  type="text" name='id_user' value="<?php echo $datos['id']?>"></td>  
                                                <th><?php echo $datos['services_name']?></th>
                                                <td><input type="text" name="seminario" min='0' max='5'></td>
                                                <td><button class="btn btn-success btn-sm">CALIFICAR</button></td>
                                            </form>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
