
<div class="col-md-12">
    <div class="card bg-info">
        <div class="card-header">
            <h4>Elaboracion de examen:</h4>
        </div>
        <div class="card-body">
            <h4>EXAMEN MEDICINA </h4>
            <form action="../logica/add_exam.php" method="POST">
                <p>Digite el numero de preguntas para el examen, de cada seminario:</p>
                <input hidden name="program" value="MEDICINA" type="text">
                <div class="row ">
                    <div class="col-md-3">
                        <label for="">Seleccione mes de examen:</label>
                        <select name="month" id="" class="form-control">
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
                    </div>
                    <div class="col-md-5">
                        <label for="">Seleccione Seminario:</label>
                        <select name="name_seminars" id="" class="form-control">
                            <?php
                                include '../logica/conexion.php';
                            
                                $sqlEx = "SELECT seminario.id,seminario.name FROM seminario WHERE seminario.state = 1 AND seminario.id_service = 3 ";
                                $resEx = mysqli_query($conexion,$sqlEx);
                                $lista = "";
                                $numeros = "";
                            
                                    while($datExam = mysqli_fetch_array($resEx)){
                                ?>
                                    
                                    <option value="<?php echo $datExam['name'] ?>"><?php echo $datExam['name'] ?></option>
                                
                                
                                <?php
    
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="">Preguntas:</label>
                        <input type="text" name="num_question" class="form-control">
                    </div>
                
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <button class="btn btn-warning">Crear Examen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>