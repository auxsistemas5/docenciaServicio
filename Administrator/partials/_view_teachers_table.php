<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Docentes Activos</h4>
        </div>
        <div class="card-body">
            <table class="" border="1" styles="justify-content: center;">
                <thead>
                    <th>NOMBRE</th>
                    <th>INSTITUCIÓN</th>
                    <th>PROGRAMA</th>
                    <th>VINCULACIÓN</th>
                    <th>SERVICIO</th>
                </thead>
                <tbody>
            
                <?php
                    require '../logica/conexion.php';
                    while($responReg = mysqli_fetch_array($resReg)){
                    $insti =$responReg['id_institution'];
                    $servi = $responReg['type_teacher'];
                    $prog = $responReg['type_prog'];

                    $sqlProg = "SELECT name FROM instituciones WHERE id = '$insti'";
                    $resProg = mysqli_query($conexion,$sqlProg);
                    $datProg = mysqli_fetch_array($resProg);

                    $sqlProg1 = "SELECT services_name FROM servicios WHERE id = '$servi'";
                    $resProg1 = mysqli_query($conexion,$sqlProg1);
                    $datProg1 = mysqli_fetch_array($resProg1);

                    $sqlProg2 = "SELECT programs_name FROM programas WHERE id = '$prog'";
                    $resProg2 = mysqli_query($conexion,$sqlProg2);
                    $datProg2 = mysqli_fetch_array($resProg2);
                ?>
                <tr>
                    <td><?php echo $responReg['name']?></td>
                    <td><?php echo $datProg[0] ?></td>
                    <td><?php echo $datProg2[0]?></td>
                    <td><?php echo $responReg['type_vinc'] ?></td>
                    <td><?php echo $datProg1[0]?></td>


                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>