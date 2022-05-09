<?php

    require '../logica/conexion.php';
    $nombre = $_SESSION['name'];
    $sqlPorgrama = "SELECT type_prog,programs_name,services_name FROM docentes INNER JOIN programas ON docentes.type_prog = programas.id INNER JOIN servicios ON servicios.id = docentes.type_servi WHERE docentes.name = '$nombre'";

    $sqlConsultaEspe = mysqli_query($conexion,$sqlPorgrama);

    $datoEspe = mysqli_fetch_array($sqlConsultaEspe);

    $programa = $datoEspe[1];
    $servicio = $datoEspe[2];
    $fechaActual = date('m');

    $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
    FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE  usuarios.position = 'INTERNO' AND registro.anulated = 0  AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-03-31'  ORDER BY registro.admission_date";
    /*
    //valida las fechas en rango de dos meses para calificar los usuarios
    if($fechaActual == '01'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio')) AND registro.finish_date BETWEEN '2022-01-01' AND '2022-01-31'   ORDER BY registro.admission_date";

    }else if($fechaActual == '02'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio')) AND registro.finish_date BETWEEN '2022-01-01' AND '2022-02-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '03'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio')) AND registro.finish_date BETWEEN '2022-02-01' AND '2022-03-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '04'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-03-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '05'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-05-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '06'){
       $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-05-01' AND '2022-06-30'  ORDER BY registro.admission_date";

    }else if($fechaActual == '07'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-06-01' AND '2022-07-30'  ORDER BY registro.admission_date";
    }else if($fechaActual == '08'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-07-01' AND '2022-08-31'  ORDER BY registro.admission_date";
    }else if($fechaActual == '09'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-08-01' AND '2022-09-30'  ORDER BY registro.admission_date";
    }else if($fechaActual == '10'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-09-01' AND '2022-10-31'  ORDER BY registro.admission_date";
    }else if($fechaActual == '11'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-10-01' AND '2022-11-30'  ORDER BY registro.admission_date";
    }else if($fechaActual == '12'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-11-01' AND '2022-12-31'  ORDER BY registro.admission_date";
    }
    */
    $sqlConsultaEstudiante = mysqli_query($conexion,$sqlEstudiantesPorEspecialista);

?>
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