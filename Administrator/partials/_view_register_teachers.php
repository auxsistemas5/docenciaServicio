<?php
    require '../logica/conexion.php';

    $sqlD = "SELECT id,name FROM instituciones";
    $resD = mysqli_query($conexion,$sqlD);

?>
<div class="col-sm-12">
    <div class="card  bg-info col-md-12">
        <div class0="">

            <div class="">
                <div class="">
                    <h3 class="card-header"><b>VER Especialistas</b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md">
                    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="container mt-2">
                            <label for="">Buscar Datos Del Especialista</label>
                            <div class=" form-group input-group">
                                <input class="form-control" type="text" name="document" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                    </button>        
                                    
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                <?php
                    require '../logica/conexion.php';
                    if(!empty($_POST['document'])){

                        $document = $_POST['document'];

                        $con = "SELECT * FROM docentes WHERE document = '$document' ";
                        $sq = mysqli_query($conexion,$con);
                        $dates = mysqli_fetch_array($sq);

                        
                        
                        if(!$dates){
                            echo "<div class='alert alert-danger'>
                                        Docente no encontrado.
                                    </div>";  
                        }else{
                            
                            $id = $dates['id'];
                            $name = $dates['name'];
                            $document = $dates['document'];
                            $institution = $dates['institucion_asociada'];
                            $estado = $dates['state'];
                            $tipovinc = $dates['type_vinc'];
                            
                            $conD = "SELECT * FROM documentos_docentes WHERE id_docente = $id ";
                            $resD = mysqli_query($conexion,$conD);



                            $con2 = "SELECT docentes.id,docentes.name,document,institucion_asociada,type_vinc,docentes.state,docentes.type_servi,docentes.type_prog,docentes.observation,docentes.calification, docentes.foto, docentes.tiene_estudiantes
                            FROM docentes where document = '$document'
                            ";

                            $sq2 = mysqli_query($conexion,$con2);
                            $dates2 = mysqli_fetch_array($sq2);

                            $programa = $dates['type_prog'];
                            $servicio = $dates['type_servi'];

                            $sqlInsti = "SELECT id, name from instituciones where id = '$dates2[3]'";
                            $resinti = mysqli_query($conexion, $sqlInsti);
                            $institu = mysqli_fetch_array($resinti);

                            $sqlP = "SELECT id,programs_name FROM programas where id = '$programa' ";
                            $resP = mysqli_query($conexion,$sqlP);
                            $prog = mysqli_fetch_array($resP);

                            $sqlS = "SELECT id, services_name FROM servicios where id = '$servicio' ";
                            $resS = mysqli_query($conexion,$sqlS);
                            $proS = mysqli_fetch_array($resS);

                            $sqlprog = "SELECT * FROM programas";
                            $resprog = mysqli_query($conexion, $sqlprog);

                            $sqlservice = "SELECT * FROM servicios";
                            $resservice = mysqli_query($conexion, $sqlservice);


                            
                            

                            if($dates2['state'] == 1){
                                $state1 = "ACTIVO";
                                $state2 = "INACTIVO";
                                $valstate1 = 1; 
                                $valstate2 = 0;
                            }else if($dates2['state'] == 0){
                                $state1 = "INACTIVO";
                                $state2 = "ACTIVO";
                                $valstate1 = 0; 
                                $valstate2 = 1;
                            }

                            if($dates['type_vinc'] == 'AGREMIACIÓN/PROENSALUD'){
                                $type1 = $dates['type_vinc'];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";
                                
                            }else if($dates['type_vinc'] == 'AGREMIACIÓN/PROSALUD'){
                                $type1 = $dates['type_vinc'];
                                $type2 = "AGREMIACIÓN/PROENSALUD'";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";

                            }else if($dates['type_vinc'] == 'AGREMIACIÓN/THAUS'){
                                $type1 = $dates['type_vinc'];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/PROENSALUD'";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";

                            }else if($dates['type_vinc'] == 'VINCULADO HMFS'){
                                $type1 = $dates['type_vinc'];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "AGREMIACIÓN/PROENSALUD'";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";

                            }else if($dates['type_vinc'] == 'EXTERNO IES'){
                                $type1 = $dates['type_vinc'];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "AGREMIACIÓN/PROENSALUD'";
                                $type6 = "ASESOR";

                            }else if($dates['type_vinc'] == 'ASESOR'){
                                $type1 = $dates['type_vinc'];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "AGREMIACIÓN/PROENSALUD'";
                            }else{
                                $type1 = "AGREMIACIÓN/PROENSALUD'";
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";
                            }

                            if($dates2['calification'] == 0){
                                $cal1 = 0;
                                $cal2 = 1;
                                $res1 = "SI";
                                $res2 = "NO";
                            }else if($dates2['calification'] == 1){
                                $cal1 = 1;
                                $cal2 = 0;
                                $res1 = "NO";
                                $res2 = "SI";
                            }

                            
                            echo "
                            <div class='col-sm-12'>
                                <div class='card  bg-light col-md-12'>
                                    <div class=''>
                                        <div class='card-header'>
                                            <h4>INFORMACION DEL ESPECIALISTA</h4>
                                        </div>
                                        <div class='card-body'>
                                            <form enctype='multipart/form-data' action='../logica/update_teacher.php' method='POST'>
                                                <div class='row'>
                                                    <div class='form-group col-md-6'>
                                                        <img id='foto' src='$dates2[10]' width='120px' height='120px'  style='border-radius:0px;border:2px solid #black;'>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <input type='text' name='id' value='$dates2[0]' hidden>
                                                    <div class='col-md-6'>
                                                        <label for=''>Nombre:</label>
                                                        <input class='form-control' type='text' name='name' value='$dates2[1]'>
                                                    </div>
                                                    <div class='col-md-4 form-group'>
                                                        <label for=''>Documento:</label>
                                                        <input class='form-control' type='text' name='document' value ='$dates2[2]'>
                                                    </div>
                                                    <div class='col-md-2 form-group'>
                                                        <label for=''>Estado:</label>
                                                        <select name='state'  class='form-control'>
                                                            <option value='$valstate1'>$state1</option>
                                                            <option value='$valstate2'>$state2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 form-group'>
                                                        <label for=''>Tipo Vinculacion:</label>
                                                        <select name='type_vinc' class='form-control'>
                                                        <option value='$type1'>$type1</option>
                                                        <option value='$type2'>$type2</option>
                                                        <option value='$type3'>$type3</option>
                                                        <option value='$type4'>$type4</option>
                                                        <option value='$type5'>$type5</option>
                                                        <option value='$type6'>$type6</option>
                                                        </select>
                                                    </div>
                                                    <div class='col-md-4 form-group'>
                                                        <label for=''>Tiene Estudiantes:</label>
                                                        <input name='students' class='form-control' type='text' value='$dates2[11]'>
                                                        
                                                    </div>
                                                    <div class='col-md-4 form-group'>
                                                        <label for=''>Institucion:</label>
                                                        <select name='id_institution'  class='form-control'>
                                                            <option value='$institu[0]'>$institu[1]</option>
                                                            ";
                                                            $sqltodasinsti = "SELECT * from instituciones";
                                                            $sqlintituresult = mysqli_query($conexion, $sqltodasinsti);

                                                            while($datosIns = mysqli_fetch_array($sqlintituresult)){
                                                                echo "<option type='text' value=".$datosIns['id'].">$datosIns[1]</option>";
                                                            }
                                                            echo"
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <label for=''>Programa:</label>
                                                        <select name='type_prog' id='' class='form-control'>
                                                            <option class='form-control' type='text' value='$dates[8]'>$prog[1]</option>";
                                                            while($datoprog = mysqli_fetch_array($resprog)){
                                                                echo "<option type='text' value=".$datoprog['id'].">$datoprog[1]</option>";
                                                            }

                                                            echo "
                                                        </select>
                                                    </div>
                                                    <div class='form-group col-md-6'>
                                                        <label for=''>Servicio:</label>
                                                        <select name='type_teacher' id='' class='form-control'>
                                                            <option type='text' value='$dates[5]'  class='form-control' selected>$proS[1]</option>
                                                            ";
                                                            while($datoServi = mysqli_fetch_array($resservice)){
                                                                echo "<option type='text' value=".$datoServi['id'].">$datoServi[1]</option>";
                                                            }
                                                            echo "
                                                            
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class='row'>
                                                    <div class='form-group col-md-3'>
                                                        <label for=''>Telefono:</label>
                                                        <input class='form-control' type='text' value='$dates[6]' name='phone'>
                                                    </div>
                                                    <div class='form-group col-md-6'>
                                                        <label for=''>Correo:</label>
                                                        <input class='form-control' type='text' value='$dates[7]' name='email'>
                                                    </div>
                                                    <div class='form-group col-md-3'>
                                                        <label for=''>Califica Internos:</label>
                                                        <select name='calification' class='form-control'>
                                                            <option value='$cal1'>$res2</option>
                                                            <option value='$cal2'>$res1</option>
                                                        <select>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='form-group col-md-12'>
                                                        <label for=>Observaciones:</label>
                                                        <input class='form-control' type='text' value='$dates[9]' name='observation'>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='form-group col-md-12'>
                                                        <label for=>Actualizar Foto:</label>
                                                        <input class='form-control' type='file'  name='file'>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div>
                                                        <button class='btn btn-success'>Actualizar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            ";
                            
                            require '_view_doc_teachers.php';
                            require '_upload_documentation_teacher.php';
                        }


                    }
                ?>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php require '_form_register_teacher.php';?>
<div class="table table-responsive">
<?php
    require '../logica/conexion.php';

    $sqlReg = "SELECT * FROM docentes WHERE state = 1";
    $resReg = mysqli_query($conexion,$sqlReg);

    $sqlInac = "SELECT * FROM docentes WHERE state = 0";
    $sqlresInac = mysqli_query($conexion, $sqlInac);
                              
    require '_view_teachers_table.php'

?>
</div>




