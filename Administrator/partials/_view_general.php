<?php require '../logica/conexion.php'; ?>
<div class="col-md-12">
    
        <div class="card">
            <!--<iframe src="" style="width:100%; height:450px;" embedded=true frameborder="0" embebed></iframe>-->
            <div class="card-header">
                <h4><b>VER ESTUIANTES EN GENERAL</b></h4>
            </div>
            <div class="card-body">
                <h4><b>USUARIOS ACTIVOS</b></h4>
                <div>

                    <?php 
                        $query = "SELECT usuarios.id, usuarios.username,usuarios.document, usuarios.formation, usuarios.position,usuarios.email, instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.state = 1 ";
                        
                        $validarUsers = mysqli_query($conexion, $query);
                        
                    ?>
                    <div class="table-responsive">
                        <table id="table" class="display">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>DOCUMENTO</th>
                                    
                                    <th>ROL</th>
                                    
                                    <th>INSTITUCIÓN</th>
                                    <th>ACCIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($datosUsuarios = mysqli_fetch_array($validarUsers)){  ?>
                                <tr>
                                    <td><?php echo $datosUsuarios['username'] ?></td>
                                    <td><?php echo $datosUsuarios['document'] ?></td>

                                    <td><?php echo $datosUsuarios['position'] ?></td>

                                    <td><?php echo $datosUsuarios['acronym'] ?></td>
                                
                                    <td><a href="view_details_student.php?id=<?php echo $id = $datosUsuarios['id']?>"class="btn btn-success btn-sm" >VER</a></td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div> <br>
                </div>
                
                <hr width="100%">
                <div class="mt-3 table-responsive">
                    <?php require '../logica/conexion.php'; ?>
                        <?php 
                            $queryD = "SELECT usuarios.username,usuarios.document, usuarios.formation, usuarios.position,usuarios.email, instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.state = 0 ";
                            $validarUsersDisabled = mysqli_query($conexion, $queryD);
                            
                        ?>
                        <div class="table-resposive">
                            <h4><b>USUARIOS INACTIVOS</b></h4>
                            <table id="tableD" class="display">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>DOCUMENTO</th>
                                        <th>FORMACIÓN</th>
                                        <th>CARGO</th>
                                        <th>CORREO</th>
                                        <th>INSTITUCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($datosUsuariosDisabled = mysqli_fetch_array($validarUsersDisabled)){  ?>
                                    <tr>
                                        <td><?php echo $datosUsuariosDisabled['username'] ?></td>
                                        <td><?php echo $datosUsuariosDisabled['document'] ?></td>
                                        <td><?php echo $datosUsuariosDisabled['formation'] ?></td>
                                        <td><?php echo $datosUsuariosDisabled['position'] ?></td>
                                        <td><?php echo $datosUsuariosDisabled['email'] ?></td>
                                        <td><?php echo $datosUsuariosDisabled['acronym'] ?></td>

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
<script>
    

</script>