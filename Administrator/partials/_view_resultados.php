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


<div class="  col-md-12">
    <div class="card">

        <div class="card-header">
    
            <h3>VISUALIZACION DE CALIFICACIONES</h3>    
        </div>
        <div class="card-body">

            <ul class=" nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>ESPECIALISTAS</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>OMITIDOS</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><b>DOCENCIA</b></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="table-responsive">
                        <table class="table" id="table-maestros">
                            <thead>
                                <tr>
                                    <th>DOCENTE</th>
                                    <th>INTERNO</th>
                                    <th>MES CALIFICADO</th>
                                    <th>CONOCIMIENTO</th>
                                    <th>ACTITUD</th>
                                    <th>SEMINARIO</th>
                                    <th>OBSERVACIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require '../logica/conexion.php';

                                    $sqlResultados = "SELECT * FROM calificacion_docente ORDER BY mes_calificado DESC";
                                    $consultaResultado = mysqli_query($conexion,$sqlResultados);

                                    if($consultaResultado){
                                        while($mostrarResultados = mysqli_fetch_array($consultaResultado)){
                                            if($mostrarResultados['result_conocimiento'] != "" ){
                                    
                                ?>
                                <tr>
                                    
                                    <td><?php echo $mostrarResultados['docente'];  ?></td>
                                    <td><?php echo $mostrarResultados['student'];  ?></td>
                                    <td><?php echo $mostrarResultados['mes_calificado'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_conocimiento'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_actitud'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_seminario'];  ?></td>
                                    <td><?php echo $mostrarResultados['observacion'];  ?></td>

                                    
                                </tr>
                                <?php
                                            }
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
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="table-responsive">
                        <table class="table" id="table-maestros-1">
                            <thead>
                                <tr>
                                    <th>DOCENTE</th>
                                    <th>INTERNO</th>
                                    <th>MES CALIFICADO</th>
                                    <th>CONOCIMIENTO</th>
                                    <th>ACTITUD</th>
                                    <th>SEMINARIO</th>
                                    <th>OBSERVACIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require '../logica/conexion.php';

                                    $sqlResultados = "SELECT * FROM calificacion_docente ORDER BY mes_calificado DESC";
                                    $consultaResultado = mysqli_query($conexion,$sqlResultados);

                                    if($consultaResultado){
                                        while($mostrarResultados = mysqli_fetch_array($consultaResultado)){
                                            if($mostrarResultados['result_conocimiento'] == "" and $mostrarResultados['result_actitud'] == "" and $mostrarResultados['result_seminario'] == ""){
                                    
                                ?>
                                <tr>
                                    
                                    <td><?php echo $mostrarResultados['docente'];  ?></td>
                                    <td><?php echo $mostrarResultados['student'];  ?></td>
                                    <td><?php echo $mostrarResultados['mes_calificado'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_conocimiento'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_actitud'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_seminario'];  ?></td>
                                    <td><?php echo $mostrarResultados['observacion'];  ?></td>

                                    
                                </tr>
                                <?php
                                            }
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
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="table-responsive">
                        <table class="table" id="table-maestros-2">
                            <thead>
                                <tr>
                                    <th>ESTUDIANTE</th>
                                    <th>SEMINARIO</th>
                                    <th>MES CALIFICADO</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require '../logica/conexion.php';

                                    $sqlResultados = "SELECT * FROM calificacion_docencia ORDER BY mes_calificado DESC";
                                    $consultaResultado = mysqli_query($conexion,$sqlResultados);

                                    if($consultaResultado){
                                        while($mostrarResultados = mysqli_fetch_array($consultaResultado)){
                                            
                                    
                                ?>
                                <tr>
                                    
                                    <td><?php echo $mostrarResultados['student'];  ?></td>
                                    <td><?php echo $mostrarResultados['result_seminario'];  ?></td>
                                    <td><?php echo $mostrarResultados['mes_calificado'];  ?></td>
                                    

                                    
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
            </div>
        </div>
    </div>
</div>

<?php /*

*/?>


