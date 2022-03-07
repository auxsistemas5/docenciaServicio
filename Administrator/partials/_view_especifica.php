<?php
    require '../logica/conexion.php';

    $sql1 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name, usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 1))
     ORDER BY usuarios.id";
    $consulta1 = mysqli_query($conexion, $sql1);

    $sql2 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 2))
     ORDER BY usuarios.id";
    $consulta2 = mysqli_query($conexion, $sql2);

    $sql3 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 3))
     ORDER BY usuarios.id";
    $consulta3 = mysqli_query($conexion, $sql3);

    $sql4 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 4))
     ORDER BY usuarios.id";
    $consulta4 = mysqli_query($conexion, $sql4);

    $sql5 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 6))
     ORDER BY usuarios.id";
    $consulta5 = mysqli_query($conexion, $sql5);

    $sql6 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 7))
     ORDER BY usuarios.id";
    $consulta6 = mysqli_query($conexion, $sql6);

    $sql7 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 9))
     ORDER BY usuarios.id";
    $consulta7 = mysqli_query($conexion, $sql7);

    $sql8 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 10))
     ORDER BY usuarios.id";
    $consulta8 = mysqli_query($conexion, $sql8);

    $sql9 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 11))
     ORDER BY usuarios.id";
    $consulta9 = mysqli_query($conexion, $sql9);

    $sql10 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 12))
     ORDER BY usuarios.id";
    $consulta10 = mysqli_query($conexion, $sql10);

    $sql11 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 13))
     ORDER BY usuarios.id";
    $consulta11 = mysqli_query($conexion, $sql11);

    $sql12 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 14))
     ORDER BY usuarios.id";
    $consulta12 = mysqli_query($conexion, $sql12);

    $sql13 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 15))
     ORDER BY usuarios.id";
    $consulta13 = mysqli_query($conexion, $sql13);

    $sql14 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 16))
     ORDER BY usuarios.id";
    $consulta14 = mysqli_query($conexion, $sql14);

    $sql15 = "SELECT registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,servicios.services_name,usuarios.email, instituciones.name,usuarios.formation
    FROM(((registro INNER JOIN servicios ON servicios.id = registro.id_service) 
    INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND usuarios.state = 1 AND servicios.id = 17))
     ORDER BY usuarios.id";
    $consulta15 = mysqli_query($conexion, $sql15);

?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <H4><b>VER ESTUDIANTES ACTIVOS POR SERVICIO</b></H4>
        </div>
        <div class="card-body">
            <p>Seleccione el servicio a consultar:</p>
            <div class="table-responsive">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">URGENCIAS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PEDIATRIA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">M.INTERNA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ginecologia" role="tab" aria-controls="contact" aria-selected="false">GINECOLOGÍA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#regulador" role="tab" aria-controls="contact" aria-selected="false">C.REGULADOR</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tox" role="tab" aria-controls="contact" aria-selected="false">TOXICOLOGÍA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ciru" role="tab" aria-controls="contact" aria-selected="false">CIRUGÍA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#usuario" role="tab" aria-controls="contact" aria-selected="false">E. USUARIO</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#upedi" role="tab" aria-controls="contact" aria-selected="false">U.PEDÍATRICAS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#psi" role="tab" aria-controls="contact" aria-selected="false">PSICOLOGÍA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#fact" role="tab" aria-controls="contact" aria-selected="false">FACTURACIÓN</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#arch" role="tab" aria-controls="contact" aria-selected="false">ARCHIVO</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#huma" role="tab" aria-controls="contact" aria-selected="false">G.HUMANA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#farm" role="tab" aria-controls="contact" aria-selected="false">FARMACIA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#juri" role="tab" aria-controls="contact" aria-selected="false">JURIDICA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#nutri" role="tab" aria-controls="contact" aria-selected="false">NUTRICIÓN</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="contact" aria-selected="false">I.BIOMÉDICA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#uci" role="tab" aria-controls="contact" aria-selected="false">UCI</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#paci" role="tab" aria-controls="contact" aria-selected="false">S.PACIENTE</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#paci" role="tab" aria-controls="contact" aria-selected="false">LABORATORIO</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#trab" role="tab" aria-controls="contact" aria-selected="false">S.Y.S TRABAJO</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <br>
                        <table class="table"  id="table">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos1 = mysqli_fetch_array($consulta1)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos1['username']   ?></td>
                                        <td><?php echo $datos1['document']   ?></td>
                                        <td><?php echo $datos1['formation']   ?></td>
                                        <td><?php echo $datos1['position']   ?></td>
                                        <td><?php echo $datos1['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <br>
                        <table class="table"  id="pediatria">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos2 = mysqli_fetch_array($consulta2)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos2['username']   ?></td>
                                        <td><?php echo $datos2['document']   ?></td>
                                        <td><?php echo $datos2['formation']   ?></td>
                                        <td><?php echo $datos2['position']   ?></td>
                                        <td><?php echo $datos2['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="interna">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos3 = mysqli_fetch_array($consulta3)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos3['username']   ?></td>
                                        <td><?php echo $datos3['document']   ?></td>
                                        <td><?php echo $datos3['formation']   ?></td>
                                        <td><?php echo $datos3['position']   ?></td>
                                        <td><?php echo $datos3['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="ginecologia" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="gineco">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos4 = mysqli_fetch_array($consulta4)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos4['username']   ?></td>
                                        <td><?php echo $datos4['document']   ?></td>
                                        <td><?php echo $datos4['formation']   ?></td>
                                        <td><?php echo $datos4['position']   ?></td>
                                        <td><?php echo $datos4['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="regulador" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="regular">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos5 = mysqli_fetch_array($consulta5)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos5['username']   ?></td>
                                        <td><?php echo $datos5['document']   ?></td>
                                        <td><?php echo $datos5['formation']   ?></td>
                                        <td><?php echo $datos5['position']   ?></td>
                                        <td><?php echo $datos5['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tox" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="toxico">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos6 = mysqli_fetch_array($consulta6)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos6['username']   ?></td>
                                        <td><?php echo $datos6['document']   ?></td>
                                        <td><?php echo $datos6['formation']   ?></td>
                                        <td><?php echo $datos6['position']   ?></td>
                                        <td><?php echo $datos6['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="ciru" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="cirugia">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos7 = mysqli_fetch_array($consulta7)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos7['username']   ?></td>
                                        <td><?php echo $datos7['document']   ?></td>
                                        <td><?php echo $datos7['formation']   ?></td>
                                        <td><?php echo $datos7['position']   ?></td>
                                        <td><?php echo $datos7['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="usuario" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="exusuario">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos8 = mysqli_fetch_array($consulta8)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos8['username']   ?></td>
                                        <td><?php echo $datos8['document']   ?></td>
                                        <td><?php echo $datos8['formation']   ?></td>
                                        <td><?php echo $datos8['position']   ?></td>
                                        <td><?php echo $datos8['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="upedi" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="pediatricas">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos8 = mysqli_fetch_array($consulta8)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos8['username']   ?></td>
                                        <td><?php echo $datos8['document']   ?></td>
                                        <td><?php echo $datos8['formation']   ?></td>
                                        <td><?php echo $datos8['position']   ?></td>
                                        <td><?php echo $datos8['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>       
                    </div>
                    <div class="tab-pane fade" id="psi" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="psicolo">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos9 = mysqli_fetch_array($consulta9)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos9['username']   ?></td>
                                        <td><?php echo $datos9['document']   ?></td>
                                        <td><?php echo $datos9['formation']   ?></td>
                                        <td><?php echo $datos9['position']   ?></td>
                                        <td><?php echo $datos9['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>    
                    </div>
                    <div class="tab-pane fade" id="fact" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="facturacion">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos10 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos10['username']   ?></td>
                                        <td><?php echo $datos10['document']   ?></td>
                                        <td><?php echo $datos10['formation']   ?></td>
                                        <td><?php echo $datos10['position']   ?></td>
                                        <td><?php echo $datos10['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="arch" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="archivo">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos10 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos10['username']   ?></td>
                                        <td><?php echo $datos10['document']   ?></td>
                                        <td><?php echo $datos10['formation']   ?></td>
                                        <td><?php echo $datos10['position']   ?></td>
                                        <td><?php echo $datos10['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="huma" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="humana">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos11 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos11['username']   ?></td>
                                        <td><?php echo $datos11['document']   ?></td>
                                        <td><?php echo $datos11['formation']   ?></td>
                                        <td><?php echo $datos11['position']   ?></td>
                                        <td><?php echo $datos11['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="farm" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="farmacia">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="juri" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="juridica">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nutri" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="nutricion">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="bio" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="biomedica">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="uci" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="ucii">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="paci" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="paciente">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="labo" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="laboratorio">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="trab" role="tabpanel" aria-labelledby="contact-tab"><br>
                        <table class="table"  id="trabajo">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>IDENTIFICACIÓN</th>
                                    <th>FORMACIÓN</th>
                                    <th>ROL</th>
                                    <th>UNIVERSIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($datos12 = mysqli_fetch_array($consulta10)){
                                ?>
                                    <tr>
                                        <td><?php echo $datos12['username']   ?></td>
                                        <td><?php echo $datos12['document']   ?></td>
                                        <td><?php echo $datos12['formation']   ?></td>
                                        <td><?php echo $datos12['position']   ?></td>
                                        <td><?php echo $datos12['name']   ?></td>
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
</div>