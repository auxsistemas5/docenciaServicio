<div class="card text-white bg-info">
                <div class="col-lg-12">
                    <div class="  panel panel-primary ">
                        <div class="card-header ">
                            <h3 class="text-white">REGISTRAR ESTUDIANTE:</h3>
                        </div>
                        <div class="card-body">
                            <form action="../logica/register_students.php" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Nombre Completo:</label>
                                            <input type="text" class="form-control" placeholder="" name="username" required >
                                        </div>
                                        <div class=" col-md-6">
                                            <label for="" class="form-label">Documento:</label>
                                            <input type="text" class="form-control" name="document" required>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 col-md-5">
                                           <label for="" class="form-label">Correo:</label>
                                            <input type="text" class="form-control" name="email">

                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="" class="form-label">Contraseña:</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="" class="form-label">Celular:</label>
                                            <input type="text" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    <div class ="row">
                                    
                                        <div class="col-md-4">
                                            <label for="inputState" class="form-label">Institucion</label>
                                            <select class="form-control form-select" name ="id_institucion" required>
                                                <option>Seleccione</option>
                                                <?php
                                                    require '../logica/conexion.php';
                                                    
                                                    $consulta = "SELECT id,acronym FROM instituciones ";
                                                    $ejecutarConsulta = mysqli_query($conexion,$consulta);

                                                    while($mostrar = mysqli_fetch_array($ejecutarConsulta)){
                                                    ?>   
                                                        <option value="<?php echo $mostrar['id']?>"><?php echo $mostrar['acronym']?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                ?> 
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Anexo</label>
                                            <select name="anexo" class="form-control">
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputState" class="form-label">Cargo:</label>
                                            <select class="form-control"  name="position" placeholder="Seleccione">
                                                <option value="ESTUDIANTE">Estudiante</option>
                                                <option value="INTERNO">Interno</option>
                                                <option value="RESIDENTE">Residente</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputState" class="form-label">Formacion:</label>
                                            <select class="form-control" name="formation" placeholder="Seleccione">
                                                <option value="TECNICO">Tecnico</option>
                                                <option value="TECNOLOGO">Tecnologo</option>
                                                <option value="PROFESIONAL">Profesional</option>
                                                <option value="POSTGRADO">PostGrado</option>
                                            </select>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row">
                                    <!--<div class="col-md-4">
                                        <label for="">Programa</label>
                                        <select class="form-control form-select" name ="id_program">
                                            <option>Seleccione</option>
                                            <?php
                                                require '../logica/conexion.php';
                                                
                                                $consulta = "SELECT id,name FROM programas ";
                                                $ejecutarConsulta = mysqli_query($conexion,$consulta);

                                                while($mostrar = mysqli_fetch_array($ejecutarConsulta)){
                                                 ?>   
                                                    <option value="<?php echo $mostrar['id']?>"><?php echo $mostrar['name']?></option>
                                                <?php
                                                }
                                                ?>

                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label  class="form-label">Servicio</label>
                                        <select class="form-control form-select" name ="id_service" >
                                            <option>Seleccione</option>
                                            <?php
                                                require '../logica/conexion.php';
                                                
                                                $consulta = "SELECT id,name FROM servicios ";
                                                $ejecutarConsulta = mysqli_query($conexion,$consulta);

                                                while($mostrar = mysqli_fetch_array($ejecutarConsulta)){
                                                 ?>   
                                                    <option value="<?php echo $mostrar['id']?>"><?php echo $mostrar['name']?></option>
                                                <?php
                                                }
                                                ?>

                                            ?>
                                        </select> <br>
                                    </div> -->
                                    
                                </div>
                                <div class="row">
                                    
                                    <!--<div class="col-md-4">
                                        <label class="form-label">Fecha Ingreso:</label><br>
                                        <input type="date" name="">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Fecha Finalizacion:</label><br>
                                        <input type="date" name="">
                                        
                                    </div>-->

                                    
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-success" name="Guardar">Guardar</button>
                                        </div>
                                                
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 