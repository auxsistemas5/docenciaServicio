<?php   
    require '../logica/conexion.php';

    $sql = "SELECT * FROM usuarios INNER JOIN registro ON registro.id_user = usuarios.id WHERE  registro.finish_date >= '2022-03-01' AND registro.finish_date <= '2022-03-30' AND position = 'INTERNO' ";

    $sqlver = mysqli_query($conexion,$sql);

?>

<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h3>CALIFICAR ESTUDIANTES</h3>
        </div>
        <div class="table-responsive">

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>FECHA FINALIZO</th>
                            <th>ACTITUD</th>
                            <th>CONOCIMIENTO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($datos = mysqli_fetch_array($sqlver)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos['username'] ?></td>
                                        <td><?php echo $datos['finish_date']?></td>
                                        <td><?php ?><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><button class="btn btn-success btn-sm">CALIFICAR</button></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
