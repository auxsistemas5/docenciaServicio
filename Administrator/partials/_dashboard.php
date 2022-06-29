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
        /*
        $fecha = date("Y-m-d");
        $update = "UPDATE usuarios set state = 0";
        $sqlres = mysqli_query($conexion,$update);
        if($sqlres){
            $sqldata = "SELECT * FROM registro WHERE registro.finish_date > '$fecha' ";
            $sqlres2 = mysqli_query($conexion,$sqldata);

            if($sqlres2){
                while($datosUser = mysqli_fetch_array($sqlres2)){
                    $id_user = $datosUser['id_user'];

                    $sqlUpdate = "UPDATE usuarios set state = 1 where id = $id_user ";
                    $sqlResult = mysqli_query($conexion,$sqlUpdate);

                    if($sqlResult){
                        echo "<script>console.log('se deshabilitaron exito')</script>";
                    }
                }
            }
        }
        */
        
        
    
        ?>
    <div class="card bg-light">
        <div class="card-header">
            <h3><b>INTERACTUA CON ESTUDIANTES</b></h3>
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info form-control btn-sm" data-toggle="modal" data-target="#staticBackdrop">
            INTERACTUA CON LOS ESTUDIANTES
            </button>

            <!-- Modal -->
            <div class=" modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl ">
                <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h3 class="d-flex modal-title text-white" id="staticBackdropLabel">CHAT PUBLICO</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mensajes bg-dark" id="mensajes">
                    
                </div>
                <div class="modal-footer">
                    <input type="text" name="remitente" id="remitente" value="<?php echo $_SESSION['username'];?>" hidden>
                    <label for="" class="text-white">MENSAJE</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-success" id="send_message">ENVIAR</button>
                </div>
                </div>
            </div>
            </div>
            
        </div>
    </div>
    
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


<div class="card col-md-12">
    
    <div class="card-body">

        <div class="col-md-12">
            <h5>ROTACION DE ESTUDIANTES MENSUAL POR SERVICIO</h5>
            

            <select name="mes" id="mes" class="form-control">
                <option value="ENERO">ENERO</option>
                <option value="FEBRERO">FEBRERO</option>
                <option value="MARZO">MARZO</option>
                <option value="ABRIL">ABRIL</option>
                <option value="MAYO">MAYO</option>
                <option value="JUNIO">JUNIO</option>
                <option value="JULIO">JULIO</option>
                <option value="AGOSTO">AGOSTO</option>
                <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                <option value="OCTUBRE">OCTUBRE</option>
                <option value="NOVIEMBRE">NOVIEMBRE</option>
                <option value="DICIEMBRE">DICIEMBRE</option>
            </select>
            <button type="button" id="mostrar" class="btn btn-success btn-sm form-control">VER ESTUDIANTES</button>
        </div>
        <br>
        <div class="">
            
            <div hidden id="char"></div>
            <div id="grafico">
                <div id='datos'></div> <br>
                <div id='datos2'></div>
            </div>
        </div>
        

    </div>

</div>


