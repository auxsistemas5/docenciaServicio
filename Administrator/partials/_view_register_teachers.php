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
                    <h3 class="card-header"><b>VER DOCENTES</b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md">
                    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="container mt-2">
                            <label for="">Buscar Datos Del Docente</label>
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

                        $con = "SELECT * FROM docentes WHERE document = $document";
                        $sq = mysqli_query($conexion,$con);
                        $dates = mysqli_fetch_array($sq);

                        
                        
                        if(!$dates){
                            echo "<div class='alert alert-danger'>
                                        Docente no encontrado.
                                    </div>";  
                        }else{
                            
                            $id = $dates[0];
                            $name = $dates[1];
                            $document = $dates[2];
                            $institution = $dates[3];
                            $estado = $dates[4];
                            $inicio = $dates[5];
                            $fin = $dates[6];
                            $tipovinc = $dates[7];
                            
                            $conD = "SELECT * FROM documentos_docentes WHERE id_docente = $id ";
                            $resD = mysqli_query($conexion,$conD);



                            $con2 = "SELECT docentes.id,docentes.name,document,id_institution,docentes.start,docentes.end,type_vinc,instituciones.name,docentes.state,docentes.type_teacher
                            FROM docentes
                            INNER JOIN instituciones
                            ON docentes.id_institution = instituciones.id where instituciones.id = '$institution'";

                            $sq2 = mysqli_query($conexion,$con2);
                            $dates2 = mysqli_fetch_array($sq2);

                            

                            if($dates2[8] == 1){
                                $state1 = "ACTIVO";
                                $state2 = "INACTIVO";
                                $valstate1 = 1; 
                                $valstate2 = 0;
                            }else if($dates2[8] == 0){
                                $state1 = "INACTIVO";
                                $state2 = "ACTIVO";
                                $valstate1 = 0; 
                                $valstate2 = 1;
                            }

                            if($dates[7] == 'AGREMIACIÓN/PROENSALUD'){
                                $type1 = $dates[7];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";
                                
                            }else if($dates[7] == 'AGREMIACIÓN/PROSALUD'){
                                $type1 = $dates[7];
                                $type2 = "AGREMIACIÓN/PROENSALUD'";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";

                            }else if($dates[7] == 'AGREMIACIÓN/THAUS'){
                                $type1 = $dates[7];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/PROENSALUD'";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";

                            }else if($dates[7] == 'VINCULADO HMFS'){
                                $type1 = $dates[7];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "AGREMIACIÓN/PROENSALUD'";
                                $type5 = "EXTERNO IES";
                                $type6 = "ASESOR";

                            }else if($dates[7] == 'EXTERNO IES'){
                                $type1 = $dates[7];
                                $type2 = "AGREMIACIÓN/PROSALUD";
                                $type3 = "AGREMIACIÓN/THAUS";
                                $type4 = "VINCULADO HMFS";
                                $type5 = "AGREMIACIÓN/PROENSALUD'";
                                $type6 = "ASESOR";

                            }else if($dates[7] == 'ASESOR'){
                                $type1 = $dates[7];
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

                            
                            echo "
                            <div class='col-sm-12'>
                                <div class='card  bg-light col-md-12'>
                                    <div class=''>
                                        <div class='card-header'>
                                            <h4>INFORMACION DEL DOCENTE</h4>
                                        </div>
                                        <div class='card-body'>
                                            <form action='../logica/update_teacher.php' method='POST'>
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
                                                    <div class='col-md-4'>
                                                        <label for=''>Inicia:</label>
                                                        <input class='form-control' type='text' name='start' value='$dates2[4]'>
                                                    </div>
                                                    <div class='col-md-4 form-group'>
                                                        <label for=''>Finaliza:</label>
                                                        <input class='form-control' type='text' name='end' value ='$dates2[5]'>
                                                    </div>
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
                                                </div>
                                                <div class='row'>
                                                    <div class='form-group col-md-6'>
                                                        <label for=''>Tipo de  Docencia:</label>
                                                        <input type='text' name='type_teacher' value='$dates2[9]'  class='form-control'>
                                                    </div>
                                                    <div class='col-md-6 form-group'>
                                                        <label for=''>Institucion:</label>
                                                        <select name='id_institution'  class='form-control'>
                                                            <option value='$institution'>$dates2[7]</option>
                                                        </select>
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


