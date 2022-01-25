<?php

    require '../logica/conexion.php';
    $nombre = $_SESSION['name'];
    $sqlPorgrama = "SELECT type_prog,programs_name,services_name FROM docentes INNER JOIN programas ON docentes.type_prog = programas.id INNER JOIN servicios ON servicios.id = docentes.type_teacher WHERE docentes.name = '$nombre'";

    $sqlConsultaEspe = mysqli_query($conexion,$sqlPorgrama);

    $datoEspe = mysqli_fetch_array($sqlConsultaEspe);

    $programa = $datoEspe[1];
    $servicio = $datoEspe[2];
    

    $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email
    FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' )) ORDER BY registro.admission_date";

    $sqlConsultaEstudiante = mysqli_query($conexion,$sqlEstudiantesPorEspecialista);

?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Estudiantes a Calificar</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>FECHA DE INICIO</th>
                            <th>CONOCIMIENTO</th>
                            <th>ACTITUD</th>
                            <th>ACCION</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                if($sqlConsultaEstudiante){
                                    while($datosEstudiantes = mysqli_fetch_array($sqlConsultaEstudiante)){
                                            $nombre = $_SESSION['name'];
                                            $estudiante = $datosEstudiantes['username'];

                                            $sqlRevisarResultados = "SELECT id FROM calificacion_docente WHERE student = '$estudiante' AND docente = '$nombre' ";

                                            $sqlBuscarCalificacion = mysqli_query($conexion,$sqlRevisarResultados);

                                            $verificar = mysqli_fetch_array($sqlBuscarCalificacion);

                                            if($verificar > 0){
                                                
                                            }else{
                                                
                                            


                                        ?>
                                        <form action="../logica/add_calification_specialist.php" method="POST">
                                            <tr>
                                                <input hidden name="student" value="<?php echo $datosEstudiantes['username']; ?>"></input>
                                                <input hidden type="text" name='nombre' value="<?php echo $_SESSION['name'];  ?>">
                                                <td><?php echo $datosEstudiantes['username'];  ?></td>
                                                <td><?php echo $datosEstudiantes['admission_date'];  ?></>
                                                <td><input type="number" min="0" max="5" value = 0 name="conocimiento"></td>
                                                <td><input type="number" min="0" max="5" value= 0 name="actitud"></td>
                                                <td><button class="btn btn-dark" type="submit">Calificar</button></td>
                                            </tr>
                                        </form>
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