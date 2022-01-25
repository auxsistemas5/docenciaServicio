<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Examen</h4>
        </div>
        <div class="card-body">
            <h5>Recuerde que para finalizar el examen debe presionar el boton terminar en caso de no hacerlo y salir de la pagina su resultado no sera guardado.</h5><br>
            <?php
                require '../logica/conexion.php';
                //trae el examen segun el mes y el programa
                $sqlExam = "SELECT * FROM examen WHERE month = 'ENERO' AND program ='MEDICINA'";
                $consultaExam = mysqli_query($conexion,$sqlExam);

                while($datesExam = mysqli_fetch_array($consultaExam)){
                    $n_seminario = $datesExam['name_seminars'];
                    $n_preguntas = $datesExam['num_question'];

            ?>
                
            <?php
                    //trae el id del de cada uno de los seminarios para el examen
                    $nombre = "SELECT id FROM seminario WHERE name = '$n_seminario' ";
                    $consuN = mysqli_query($conexion,$nombre);
                    $dateN = mysqli_fetch_array($consuN);
                    $IdSeminario = $dateN[0];
                
                    //selecciona las preguntas segun el seminario que trae los parametros del examen
                    $exam = "SELECT question,answer FROM preguntas WHERE id_seminar = $IdSeminario ORDER BY RAND() LIMIT $n_preguntas ";
                    $consultaRandom = mysqli_query($conexion,$exam);

                    
                    
                    echo "<form action='../logica/finish_exam.php' method='POST'>";
                    while($datesR = mysqli_fetch_array($consultaRandom)){
                        $Random = "SELECT answer FROM preguntas WHERE program = 'MEDICINA INTERNA' ORDER BY RAND() LIMIT 3 ";
                        $consultaRandom1 = mysqli_query($conexion,$Random);
                        
                        ?>
                        
                    
                            <div>
                                <label><b>>><?php echo $datesR['question'] ?></b></label> <br>
                                <input hidden name="mes" value="<?php echo date('n') ?>" type="text">
                                <input hidden type="text" name="question[]" value="<?php echo $datesR['question'] ?>">
                                <input hidden type="text" value="<?php echo $datesR['answer'] ?>" name="correcta[]">
                                <input hidden type="text" name="student" value="<?php echo $_SESSION['username'] ?>">
                                <select name="respuesta[]" id="" class="form-control">
                                    <option value="">SELECCIONE</option>
                                    <option value="<?php echo $datesR['answer'] ?>"><?php echo $datesR['answer'] ?></option>
                                    <?php 
                                        while($resRandom = mysqli_fetch_array($consultaRandom1)){
                                    ?>
                                        <option value="<?php echo $resRandom['answer'] ?>"><?php echo $resRandom['answer'] ?></option>
                                        <?php
                                        }
                                    ?>
                                </select>
                            </div><br>
                        
                    
                    <?php
                        
                        
                    }
                }
                echo "<div class='form-group'>
                    <button type='submit' class='btn btn-warning'>Terminar Examen</button>
                </div>
                </form>"
            ?>
        </div>
    </div>
</div>


