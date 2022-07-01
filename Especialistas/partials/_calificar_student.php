<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Estudiantes a Calificar</h4>
            <span class="badge badge-danger">RECUERDE...SI NO CONOCE EL ESTUDIANTE POR FAVOR DEJARLO SIN VALORES Y SOLO PRESIONA CALIFICAR </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tabla_resultados">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>FOTO</th>
                            <th>MES A CALIFICAR</th>
                            <th>CONOCIMIENTO</th>
                            <th>ACTITUD</th>
                            <th>SEMINARIO</th>
                            <th>OBSERVACIONES</th>
                            <th>ACCION</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                                if($sqlConsultaEstudiante){
                                    while($datosEstudiantes = mysqli_fetch_array($sqlConsultaEstudiante)){
                                            $nombre = $_SESSION['name'];
                                            $estudiante = $datosEstudiantes['username'];
                                            //verifica si ya se le califico al estudiante
                                            $sqlRevisarResultados = "SELECT id FROM calificacion_docente WHERE  (student = '$estudiante') AND (docente = '$nombre')";

                                            $sqlBuscarCalificacion = mysqli_query($conexion,$sqlRevisarResultados);

                                            $verificar = mysqli_fetch_array($sqlBuscarCalificacion);

                                            if($verificar > 0){
                                                
                                            }else{
                                                
                                        ?>
                                            <tr>
                                                <form action="../logica/add_calification_specialist.php?student=<?php echo $datosEstudiantes['username'] ?>&nombre=<?php echo $_SESSION['name'];  ?>" method="POST" id="formulario">


                                                    <td><?php echo $datosEstudiantes['username'];  ?></td>

                                                    <td><img src="<?php echo $datosEstudiantes['photo'] ?>" width='120px' height='120px'></td>

                                                    <td><?php
                                                        $finalizacion = $datosEstudiantes['finish_date'];
                                                        $dates = explode('-',$finalizacion);
                                                        if($dates[1] == '01'){
                                                            echo "ENERO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '02'){
                                                            echo "FEBRERO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '03'){
                                                            echo "MARZO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '04'){
                                                            echo "ABRIL";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '05'){
                                                            echo "MAYO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '06'){
                                                            echo "JUNIO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '07'){
                                                            echo "JULIO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '08'){
                                                            echo "AGOSTO";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '09'){
                                                            echo "SEPTIEMBRE";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '10'){
                                                            echo "OCTUBRE";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '11'){
                                                            echo "NOVIEMBRE";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }else if($dates[1] == '12'){
                                                            echo "DICIEMBRE";
                                                            echo "<input hidden name='mes_calificado' value='$finalizacion'>";
                                                        }
                                                        ?>
                                                    </td>
                                                    
                                                    <td><input id="conocimiento" min="0" max="5" type="number" step="any"  name="conocimiento" class="form-control"></td>

                                                    <td><input id="actitud" min="0" max="5"  type="number" step="any"  name="actitud" class="form-control"></td>

                                                    <td><input type="text" min="0" max="5"  name="seminario" class="form-control"></td>

                                                    <td>
                                                        <textarea class="form-control" name="observacion" id="" cols="10" rows="3"></textarea>
                                                    </td>
                                                    <td><button id="calificar" class="btn btn-dark btn-sm" type="submit">Calificar</button></td>
                                                </form>
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