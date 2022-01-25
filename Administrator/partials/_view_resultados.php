<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Resultados Evaluación:</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Estudiante</th>
                                    <th>Resultado</th>
                                    <th>Mes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require '../logica/conexion.php';

                                    $sqlResultados = "SELECT * FROM resultados ";
                                    $consultaResultado = mysqli_query($conexion,$sqlResultados);

                                    if($consultaResultado){
                                        while($mostrarResultados = mysqli_fetch_array($consultaResultado)){
                                    
                                ?>
                                <tr>
                                    <td><?php echo $mostrarResultados['student'];  ?></td>
                                    <td><?php echo $mostrarResultados['result'];  ?></td>
                                    <td><?php echo $mostrarResultados['month'];  ?></td>
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
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Resultados Calificacion Docentes:</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>DOCENTE</th>
                                    <th>INTERNO</th>
                                    <th>CONOCIMIENTO</th>
                                    <th>ACTITUD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require '../logica/conexion.php';

                                    $sqlResultados = "SELECT * FROM calificacion_docente ";
                                    $consultaResultado = mysqli_query($conexion,$sqlResultados);

                                    if($consultaResultado){
                                        while($mostrarResultados = mysqli_fetch_array($consultaResultado)){
                                    
                                ?>
                                <tr>
                                    <td><?php echo $mostrarResultados['docente'];  ?></td>
                                    <td><?php echo $mostrarResultados['student'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_conocimiento'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_actitud'];  ?></td>
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
    </div>
</div>


