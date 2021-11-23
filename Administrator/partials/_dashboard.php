<?php
    require '../logica/conexion.php';
    $quer = "SELECT id,name FROM instituciones ";
    $execute = mysqli_query($conexion,$quer);
    require '../logica/stats_graphics_for_institution.php'
?>


<div class="col-sm-12">
    <div class="card  bg-info">
        <div class0="">

            <div class="">
                <div class="">
                    <h3 class="card-header"><b>GENERAR PDF</b></h3>
                </div>
            </div>
            <div class="container row">
                <div class="col-md-8">
                    <form  action="../logica/create_pdf_students_active.php" method="POST" target="_blank">
                        <div class="container mt-2">
                            <label for="">Generar visual de Estudiantes activos por Institucion</label>
                            <div class=" form-group input-group">
                                <Select name="id" class="form-control form-select">
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
                                    <a class="btn btn-danger" href="dashboard.php">Refresh</a>          
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

