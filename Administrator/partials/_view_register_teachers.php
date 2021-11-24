
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
                                <input type="text" name="document" required>
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
                            
                        }


                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card  bg-info col-md-12">
        <div class="card-header">
            <h4>REGISTRAR DOCENTE</h4>
        </div>
        <div class="card-body">

        </div>
   </div>
</div>