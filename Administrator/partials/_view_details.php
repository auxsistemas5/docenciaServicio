<?php
    require '../logica/conexion.php';
    $id = $_GET['id'];
    
    //selecciona los datos del usuario//
    $sql = "SELECT usuarios.username, usuarios.document, usuarios.formation, usuarios.position, usuarios.email, usuarios.phone, usuarios.state, instituciones.acronym, usuarios.photo FROM usuarios 
    INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id
    where usuarios.id = '$id' ";
    $conUser = mysqli_query($conexion, $sql);
    $User = mysqli_fetch_array($conUser);

    $sqldoc = "SELECT * FROM documentosestudiantes where id_user = '$id' ";
    $sqldoc = mysqli_query($conexion, $sqldoc);

    $sqlreg = "SELECT servicios.services_name,programas.programs_name,registro.admission_date,registro.finish_date,registro.teacher,registro.type_teacher,registro.observation,registro.anulated
    FROM (((registro INNER JOIN programas ON programas.id = registro.id_program) INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user)where registro.id_user = $id AND registro.anulated = 0 ORDER BY registro.admission_date";
    $sqlres = mysqli_query($conexion, $sqlreg);

    $datosTable = mysqli_fetch_array($sqlres);
    



?>
<div class="col-md-12">
    <div class="card">
        
        <div class="card-body">
            <h4><b>DETALLES DE USUARIO</b></h4>
            <div class="row">
                <div class='form-group col-md-6'>
                    <img src='<?php echo $User['photo']?>' width='120px' height='120px'  style='border-radius:0px;border:2px solid #black;'>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for=""><b>NOMBRE:</b></label>
                    <p><?php echo $User['username'] ?></p>
                </div>
                <div class="col-md-3">
                    <label for=""><b>DOCUMENTO:</b></label>
                    <p><?php echo $User['document'] ?></p>
                </div>
                <div class="col-md-3">
                    <label for=""><b>ROL:</b></label>
                    <p><?php echo $User['position'] ?></p>
                </div>
                <div class="col-md-2">
                    <label for=""><b>FORMACION ACTUAL:</b></label>
                    <p><?php echo $User['formation'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for=""><b>CORREO:</b></label>
                    <p><?php echo $User['email'] ?></p>
                </div>
                <div class="col-md-3">
                    <label for=""><b>TELEFONO:</b></label>
                    <p><?php echo $User['phone'] ?></p>
                </div>
                <div class="col-md-3">
                    <label for=""><b>INSTITUCIÓN:</b></label>
                    <p><?php echo $User['acronym'] ?></p>
                </div>
                <div class="col-md-2">
                    <label for=""><b>ESTADO ACTUAL:</b></label>
                    <?php
                        if($User['state'] == 1){
                            echo "<p>ACTIVO</p>";
                        }else{
                            echo "<p>INACTIVO</p>";
                        }
                     ?>
                </div>
            </div>
            <h5><b>DOCUMENTOS ANEXADOS</b></h5>
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <thead>

                        </thead>
                        <tbody>
                            <?php
                                $array = array("#A93226", "#7D3C98", "#1F618D", "#138D75", "#229954", "#BA4A00", "#616A6B", "#283747", "#AF601A", "#9A7D0A", "#2874A6", "#633974", "#935116", "#CB4335");
                                while($doc = mysqli_fetch_array($sqldoc)){
                                    $aleatorio = array_rand($array, 1);
                                       ?>
                                        <tr>
                                            <td class="btn text-white  btn-sm" style="background:<?php echo $array[$aleatorio]?>"><a class="text-white" href="<?php echo $doc['file'] ?>" target="_blank"><b><?php echo strtoupper($doc['type_document']) ?></b></a></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <h4 class="mt-2"><B>REGISTROS CORRESPONDIENTES</B></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                    <table class='table'>
                    <thead>
                        <tr>
            
                            
                            <th>PROGRAMA</th>
                            <th>SERVICIO</th>
                            <th>FECHA INICIO</th>
                            <th>FECHA FINALIZACION</th>
                            <th>DOCENTE</th>
                            <th >TIPO VINCULACION</th>
                            <th>Observaciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td><?php echo $datosTable['programs_name']; ?></td>
                            <td><?php echo $datosTable['services_name']; ?></td>
                            <td><?php echo $datosTable['admission_date']; ?></td>
                            <td><?php echo $datosTable['finish_date']; ?></td>
                            <td><?php echo $datosTable['teacher']; ?></td>
                            <td><?php echo $datosTable['type_teacher']; ?></td>
                            <td><?php echo $datosTable['observation']; ?></td>
                        </tr>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>