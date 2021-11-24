
            <!-- [ sample-page ] start -->
<div class="col-sm-12">
    <div class="card  bg-info">
        <div class="card-header">
            <h3>INFORMACION DE ESTUDIANTE</h3>
        </div>
        <div class="">
            <div class="form-group">
                <div class="form-group col-md-6">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" >
                        <label for="">Verificar documento: </label>
                        <div class=" form-group input-group">
                            <input type="text" class="form-control" name="document">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                </button> 
                                <!--Refresca la pagina para borrar los datos de la pantalla-->
                                <button class="btn btn-danger" onclick="setTimeout(function(){location.reload();}, 3000);">Refresh</button>
                            </span>

                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                    
                    <?php
                        if(!empty($_POST['document'])){
                            require '../logica/conexion.php';

                            $document = $_POST['document'];
                            
                            $query = "SELECT * FROM usuarios WHERE document = '$document'";
                            $consulta = mysqli_query($conexion,$query);
                            $array = mysqli_fetch_array($consulta);

                            

                            //echo $array[0];
                            
                            if(!$array){
                                echo "<div class='alert alert-danger'>
                                        Usuario no encontrado.
                                    </div>";    
                            }else{
                                $id = $array[0];

                                $query2 = "SELECT name,acronym FROM usuarios
                                        INNER JOIN instituciones ON instituciones.id = $array[7]";
                                $consulta2 = mysqli_query($conexion,$query2);
                                $array2 = mysqli_fetch_array($consulta2);


                                $query3 = "SELECT * FROM programas ";
                                $consulta3 = mysqli_query($conexion,$query3);

                                $query4 = "SELECT * FROM servicios ";
                                $consulta4 = mysqli_query($conexion,$query4);

                                if($array[5] != ""){
                                    if($array[5] == 1){
                                        $state = "Activo";
                                        $state1 = "Inactivo";
                                        $State_value = 1;
                                        $State_value1 = 0;

                                    }else if($array[5] == 0){
                                        $state = "Inactivo";
                                        $state1 = "Activo";
                                        $State_value = 0;
                                        $State_value1 = 1;
                                    }
                                }
                                if($array[8] != ''){
                                    if($array[8] == 'ESTUDIANTE'){
                                        $pos1 = $array[8];
                                        $pos2 = "INTERNO";
                                        $pos3 = "RESIDENTE";
                                    }else if($array[8] == 'INTERNO'){
                                        $pos1 = $array[8];
                                        $pos2 = "ESTUDIANTE";
                                        $pos3 = "RESIDENTE";
                                    }else if($array[8] == 'RESIDENTE'){
                                        $pos1 = $array[8];
                                        $pos2 = "INTERNO";
                                        $pos3 = "ESTUDIANTE";
                                    }
                                    else if($array[8] == ''){
                                        $pos1 = "ESTUDIANTE";
                                        $pos2 = "INTERNO";
                                        $pos3 = "RESIDENTE";
                                    }
                                }
                                if($array[9] != ""){
                                    if($array[9] == 'TECNICO'){
                                        $for1 = $array[9];
                                        $for2 = "TECNOLOGO";
                                        $for3 = "PROFESIONAL";
                                        $for4 = "POSTGRADO";
                                    }else if($array[9] == 'TECNOLOGO'){
                                        $for1 = $array[9];
                                        $for2 = "TECNICO";
                                        $for3 = "PROFESIONAL";
                                        $for4 = "POSTGRADO";
                                    }else if($array[9] == 'PROFESIONAL'){
                                        $for1 = $array[9];
                                        $for2 = "TECNICO";
                                        $for3 = "TECNOLOGO";
                                        $for4 = "POSTGRADO";
                                    }else if($array[9] == 'POSTGRADO'){
                                        $for1 = $array[9];
                                        $for2 = "TECNICO";
                                        $for3 = "TECNOLOGO";
                                        $for4 = "PROFESIONAL";
                                    }else if($array[9] == ''){
                                        $for1 = "TECNICO";
                                        $for2 = "TECNOLOGO";
                                        $for3 = "PROFESIONAL";
                                        $for4 = "POSTGRADO";
                                    }
                                }

                                
                                if($array[11] == 'SI'){
                                    $res1 = "SI";
                                    $res2 = "NO";
                                }else if($array[11] == "NO"){
                                    $res1 = "NO";
                                    $res2 = "SI";
                                }else if($array[11] == ''){
                                    $res1 = "NO";
                                    $res2 = "SI";
                                }
                                
                                
                                echo"<div class='card-body '>
                                    <div class='card bg-light col-md-12'>
                                        <div class='mt-2 '>
                                            <h4 >DATOS DEL ESTUDIANTE:</h4>
                                        </div>
                                        <form class='form-v1' action='../logica/update_students.php' method='POST'>
                                            <div class='row'>
                                                <div class='form-group col-md-6'>
                                                    <input value='$id' name='id' hidden>
                                                    <div class='col-md-'>
                                                        <div class=''>
                                                            <b>Nombre:</b><input name='username' class='form-control' value='$array[1]' >
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class='form-group col-md-3'>
                                                    <div class='col-md-'>
                                                        <b>Documento:</b><input name='document' class='form-control' value='$array[2]' >
                                                    </div>
                                                </div>
                                                <div class='col-md-3'>
                                                    <div class='col-md-'>
                                                        <b>Estado:<select class='form-control' name='state'></br>
                                                        <option value='$State_value' select='selected'>$state</option>
                                                        <option value='$State_value1'>$state1</option>
                                                        <b></select >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='form-group col-md-4 '>
                                                    <div class=''>
                                                        <b>Correo:</b><input name='email' class='form-control' value='$array[10]' >
                                                    </div>
                                                </div>
                                                
                                                <div class='form-group col-md-4'>
                                                    <b>Telefono:</b><input name='phone' class='form-control' value='$array[6]' >
                                                </div>
                                                <div class='form-group col-md-4'>
                                                    <b>Instucion:
                                                    <select name='id_institucion' class='form-control'>
                                                        <option class='form-control'value='$array[7]' >$array2[0]</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='form-group col-md-4'>
                                                    <b>Cargo:</b>
                                                    <select class='form-control' name='position'>
                                                        <option value='$pos1'>$pos1</option selected='selected'>
                                                        <option value='$pos2'>$pos2</option>
                                                        <option value='$pos3'>$pos3</option>
                                                    </select>
                                                </div>
                                                <div class='form-group col-md-4'>
                                                    <div class=''>
                                                        <b>Formacion:
                                                        <select class='form-control' name='formation'>
                                                            <option  value='$for1' selected='selected' >$for1</option>
                                                            <option  value='$for2' >$for2</option>
                                                            <option  value='$for3' >$for3</option>
                                                            <option  value='$for4' >$for4</option>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                <div class='form-group '>
                                                    <b>Anexo:
                                                    <select class='form-control' name='anexo'>
                                                        <option  value='$res1' selected='selected' >$res1</option>
                                                        <option  value='$res2' >$res2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='mt-2 panel-footer'>
                                                <button type='submit' name='actualizar' class='btn btn-success'>Actualizar</button>
                                            </div> </br>
                                        </form>   
                                    </div>                                    
                                </div>

                                
                                
                                    ";

                                $query5 = "SELECT  documentosestudiantes.id,file,type_document
                                FROM documentosestudiantes
                                INNER JOIN usuarios
                                ON documentosestudiantes.id_user = usuarios.id WHERE usuarios.id = $id";
                                $consulta5 = mysqli_query($conexion,$query5);
                                //$array3 = mysqli_fetch_array($consulta5);

                                
                                require 'partials/_view_documentation.php';
                                require 'partials/_add_register.php';  
                                require 'partials/_upload_resource.php';                         
                            }
                        }
                    ?>
                </div>
                
            </div>
        </div>
        <?php require 'partials/_form_register_students.php'; ?>
    </div>
</div>

<a href=""></a>

    <!-- [ sample-page ] end -->
