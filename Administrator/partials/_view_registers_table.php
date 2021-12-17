<div class='col-lg-12'>
    <div class='card  bg-light '>
        <div class='card-header'>
            <h3>REGISTRO ESTUDIANTE</h3>
        </div>
        <!-- /.panel-heading -->
        <div class='card-body'>
            <div class='table-responsive'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th hidden>ID</th>
                            <th>NOMBRE</th>
                            <th>PROGRAMA</th>
                            <th>SERVICIO</th>
                            <th>FECHA INICIO</th>
                            <th>FECHA FINALIZACION</th>
                            <th>Observaciones</th>
                            <th>DOCENTE</th>
                            <th >TIPO VINCULACION</th>
                            <th>ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="../logica/update_anulated_state.php" method="POST">
                            <?php 

                            while($dates = mysqli_fetch_array($consulta2)){
                                if($dates['anulated'] == 0){
                                    $anulado = "NO";
                                    $valor = "SI";
                                    $var = 1;
                                }else{
                                    $anulado = "SI";
                                    $valor = "NO";
                                    $var = 0;
                                }

                                
                            ?> 
                                
                            <tr>
                            
                                <td hidden><input type="text" name="id" value="<?php echo $dates['id']?>"
                                ></td>
                                <td><?php echo $dates['username']?></td>
                                <td><?php echo $dates['programs_name']?></td>
                                <td><?php echo $dates['services_name']?></td>
                                <td><?php echo $dates['admission_date']?></td>
                                <td><?php echo $dates['finish_date']?></td>
                                <td><?php echo $dates['observation']?></td>
                                <td><?php echo $dates['teacher']?></td>
                                <td><?php echo $dates['type_teacher']?></td>
                                <td><button class=" btn-danger"><i class="fa fa-trash"></i></button></td>

                            </tr>
                            <?php
                            
                            }
                            ?>
                        </form>
                    </tbody>
                </table>
            </div>
        <!-- /.table-responsive -->
        </div>
    <!-- /.panel-body -->
    </div>
<!-- /.panel -->
</div>