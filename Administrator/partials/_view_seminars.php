<div class="col-md-12">
    <div class="card bg-info">
        <div class="card-header">
            <h4>REGISTAR SEMINARIOS</h4>
        </div>
        <div class="card-body">
            <div class="">
                <form action="../logica/add_seminar.php" method="post">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="">Nombre Seminario:</label>
                            <input class="form-group form-control" type="text" name="name">
                        </div>
                        <div class="col-md-7">
                            <label for="">Servicio al que pertenece:</label>
                            <select name="id_service" class="form-control" >
                                <?php
                                    include '../logica/conexion.php';

                                    $sqlSem = "SELECT id,services_name FROM servicios";
                                    $conSem = mysqli_query($conexion,$sqlSem);

                                    while($dateSem = mysqli_fetch_array($conSem)){
                                ?>
                                    <option value="<?php echo $dateSem['id']?>"><?php echo $dateSem['services_name'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <button class="btn btn-success" type="submit">Crear Seminario</button>
                        </div>                
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card bg-info ">
        <div class="card-header">
            <h4>LISTA DE SEMINARIOS ACTIVOS</h4>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table bg-light">
                            <thead>
                                <tr>
                                    <th>NOMBRE DEL SEMINARIO</th>
                                    <th>SERVICIO AL QUE PERTENECE</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                    <?php
                                        $sqlTab = "SELECT * FROM seminario where state = 1";
                                        $resTab = mysqli_query($conexion,$sqlTab);
                                        
                                        $ia = 1;
                                        while($dateTab = mysqli_fetch_array($resTab)){

                                            $sqlT = "SELECT id,services_name FROM servicios where servicios.id = $dateTab[2]";
                                            $resT = mysqli_query($conexion,$sqlT);
                                            $dateT = mysqli_fetch_array($resT);
                                            $nombre = $dateTab['name'];
                                            $idT = $dateTab['id'];
                                    ?>
                                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" id="formulario_seminario" method="POST">
                                                <tr>
                                                
                                                    <td hidden><input type="text" name="indicador" value="<?php echo $ia ?>" /></td>
                                                    <td><?php echo  $nombre?></td>
                                                    <td><?php echo $dateT[1]?></td>
                                                    
                                                    <td><button type="submit" id="enviar" class="btn  btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Ver Preguntas</button></td>
                                                    
                                                </tr>
                                            </form> 
                                            
                                            
                                    <?php

                                            $ia++;
                                            
                                        
                                        }
                                        include '../logica/conexion.php';
                                        
                                        if(!empty($_POST['indicador'])){

                                            $idN = $_POST['indicador'];
                                            $sqlSee = "SELECT preguntas.id,preguntas.id_seminar,preguntas.question,preguntas.answer,seminario.name FROM preguntas INNER JOIN seminario ON
                                            preguntas.id_seminar = seminario.id WHERE seminario.id = $idN ";
                                            $consulTab = mysqli_query($conexion,$sqlSee);
                                            

                                            if(!$consulTab){
                                                echo "<div class='alert alert-danger'>
                                                        No se Encontraron Preguntas
                                                    </div>"; 
                                                
                                            }else if($consulTab){
                                                
                                                
                                                        require 'view_question_for_seminar.php';    
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

