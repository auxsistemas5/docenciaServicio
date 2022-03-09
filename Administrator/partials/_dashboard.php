<?php
    require '../logica/conexion.php';
    $quer = "SELECT id,name FROM instituciones ";
    $execute = mysqli_query($conexion,$quer);
    require '../logica/stats_graphics_for_institution.php';
    require '../logica/stats_graphics_for_dates.php';
    require '../logica/stats_graphics_for_services.php';
    require '../logica/stats_graphics_for_program.php';
    require '../logica/stats_graphics_for_formation.php';
    
    setlocale(LC_ALL,"es_ES");

    $queryS = "SELECT id FROM usuarios";
    $executeS = mysqli_query($conexion,$queryS);
    
    $i = 0;
    while($st = mysqli_fetch_array($executeS)){
        $i++;
    }

?>

<div class="col-sm-12">
    
    <?php
        //desabilita los estudiantes segun la fecha de finalizacion del ultimo registro
        $fecha = date("Y-m-d");
        $sqlDisabled = "SELECT usuarios.id,usuarios.state,registro.finish_date FROM registro INNER JOIN usuarios ON registro.id_user = usuarios.id 
         WHERE usuarios.state = 1 ";

        $consultaDisabled = mysqli_query($conexion,$sqlDisabled);
        $compa1 = mysqli_fetch_array($consultaDisabled);
        $cuenta = 0;
        if($consultaDisabled){
            while($datesDisabled = mysqli_fetch_array($consultaDisabled)){
                
                if($fecha > $datesDisabled['finish_date']){
                        $id = $datesDisabled[0];
                        $disabled = "UPDATE usuarios SET state = 0 WHERE id = '$id' ";
                        $consultaDis = mysqli_query($conexion,$disabled);
        
                        if($consultaDis){
                            echo '<script language="javascript">Console.log("Se desabilitaron usuarios")</script>';

                        }
                }
                $cuenta++;
            
<<<<<<< HEAD
=======

>>>>>>> 46e9c2b09a989bbe97a1161e011188dce5a03091
                echo "<script language='javascript'>Console.log('Se desabilitaron usuarios '".$cuenta.")</script>"; 
            }

            

            
        }else if(!$consultaDisabled){
            echo "<div class='alert alert-success'>
                       Sin Novedades
                    </div>"; 
        }else{
            echo "<div class='alert alert-success'>
                       Sin Novedades
                    </div>"; 
        }
    
        ?>
    
    <div class="card  bg-info">
        <div class0="">
            

            <div class="">
                <div class="">
                    <h3 class="card-header"><b>GENERAR PDF</b></h3>
                </div>
            </div>
            <div class="container row">
                <div class="col-md-12 ">
                    <form  action="../logica/create_pdf_students_active.php" method="POST" target="_blank">
                        <div class="col-md-12 offset-md mt-2">
                            <label for="">Generar visual de Estudiantes activos por Institucion</label>
                            <div class="form-group input-group">
                                <Select name="id" class="container form-control form-select">
                                <?php 
                                while($mostrar = mysqli_fetch_array($execute)){
                                ?>
                                    <option class="" value="<?php echo $mostrar['id'] ?>"><?php echo $mostrar['name'] ?></option>                            
                                <?php
                                }
                                ?>
                                </Select>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                    </button>        
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container col-md-12">
    <div class="card">
        <div class="card-body">
            <h6>ESTUDIANTES ACTIVOS POR INSTITUCION</h6>
            <span>Bienvenido, En cada porcentaje se muestra los estudiantes actualmente activos por institución.</span>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <div id="pie-chart-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4>Estudiantes que ingresan por mes</h4>
            <h5>Estudiantes totales: <?php echo $i ?></h5>

        </div>
        <div class="card-body">
            <div id="bar-chart-1"></div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4>Estudiantes Registrados por Servicio</h4>
            <h5>Servicios totales: 23</h5>

        </div>
        <div class="card-body">
            <div id="bar-chart-2"></div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4>Estudiantes Registrados por Programa</h4>
            <h5>Servicios totales: 13</h5>

        </div>
        <div class="card-body">
            <div id="bar-chart-6"></div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4>Estudiantes Registrados por Formación</h4>
            <h5>Formaciones totales: 4</h5>

        </div>
        <div class="card-body">
            <div id="pie-chart-2"></div>
        </div>
    </div>
</div>
<?php
    require '../logica/conexion.php';

    $sqlReg = "SELECT * FROM docentes WHERE state = 1";
    $resReg = mysqli_query($conexion,$sqlReg);
                              
    require '_view_teachers_table.php';

?>

