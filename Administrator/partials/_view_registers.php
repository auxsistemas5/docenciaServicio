<div class="col-sm-12">
    <div class="card  bg-info ">
        <div class="">

            <div class="">
                <div class="">
                    <h3 class="card-header"><b>VER REGISTROS</b></h3>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-12">
                    <form class="col-md-12 offset-md"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <label for="container">Buscar Registro de Estudiante</label>
                        <div class=" form-group input-group">
                            <input type="text" class="form-control" name="document" placeholder="Documento">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                </button>
                                
                                <button class="btn btn-danger" onclick="setTimeout(function(){location.reload();}, 3000);">Refresh</button>
                            
                            
                            </span>
                        </div>
                
            
                        
                        <?php
    
                            if(!empty($_POST['document'])){
                                require '../logica/conexion.php';
    
                                $document = $_POST['document'];
                                
                                $query = "SELECT * FROM usuarios WHERE document = '$document'";
                                $consulta = mysqli_query($conexion,$query);
                                $array = mysqli_fetch_array($consulta);
    
                                
                                //echo $array[0];
                                
                                if(!$array){
                                    echo "</br><div class='col-md-12 alert alert-danger'>
                                               El Usuario no existe aun
                                            </div>"; 
                                    $consulta2 = "";
                                }else if ($array){
                                    $id = $array[0];
                                    //consulta el ultimo registro hecho hacia el usuario
                                    $query2 = "SELECT registro.id,usuarios.username,servicios.services_name,programas.programs_name,registro.admission_date,registro.finish_date,registro.teacher,registro.type_teacher,registro.observation,registro.anulated,usuarios.position
                                    FROM (((registro INNER JOIN programas ON programas.id = registro.id_program) INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user)where registro.id_user = $id AND registro.anulated = 0 ORDER BY registro.admission_date";


                                    $consulta2 = mysqli_query($conexion,$query2);
                                    
                                }
                                echo "</form>";
                                if($consulta2){
                                    require 'partials/_view_registers_table.php';
                                }else {
                                    $consulta2 = "";
                                }
                            }
                            
                        
                        
                        ?>
                </div>
                <div class="col-md-3" hidden>p</div>
                <div class ="col-md-3" hidden >p</div>
            </div>
        </div>
        
    </div>
</div>