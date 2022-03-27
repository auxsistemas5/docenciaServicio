<div class="table-responsive">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Especialistas Activos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="table-docentes" class="" border="1" styles="justify-content: center;">
                    <thead>
                        <th>NOMBRE</th>
                        <th>DOCUMENTO</th>
                        <th>VINCULACIÓN</th>
                        <th>PROGRAMA</th>
                        <th>SERVICIO</th>
                        <th>INSTITUCION</th>
                    </thead>
                    <tbody>
                
                    <?php
                        require '../logica/conexion.php';
                        while($responReg = mysqli_fetch_array($resReg)){
                        $insti =$responReg['institucion_asociada'];
                        $servi = $responReg['type_servi'];
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
                        <td><?php echo $responReg['name'];?></td>
                        <td><?php echo $responReg['document'] ?></td>
                        <td><?php echo $responReg['type_vinc'] ?></td>
                        <td><?php echo $datProg2[0]?></td>
                        <td><?php echo $datProg1[0]?></td>
                        <td><?php echo $datProg['name'] ?></td>

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
</div>

<div class="table-responsive">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Especialistas Inactivos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="table-inac" class="" border="1" styles="justify-content: center;">
                    <thead>
                        <th>NOMBRE</th>
                        <th>DOCUMENTO</th>
                        <th>VINCULACIÓN</th>
                        <th>PROGRAMA</th>
                        <th>SERVICIO</th>
                        <th>INSTITUCION</th>
                    </thead>
                    <tbody>
                
                    <?php
                        require '../logica/conexion.php';
                        while($responReg = mysqli_fetch_array($sqlresInac)){
                        $insti =$responReg['institucion_asociada'];
                        $servi = $responReg['type_servi'];
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
                        <td><?php echo $responReg['name'];?></td>
                        <td><?php echo $responReg['document'] ?></td>
                        <td><?php echo $responReg['type_vinc'] ?></td>
                        <td><?php echo $datProg2[0]?></td>
                        <td><?php echo $datProg1[0]?></td>
                        <td><?php echo $datProg['name'] ?></td>

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
</div>