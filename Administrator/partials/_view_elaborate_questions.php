<?php
    require '../logica/conexion.php';

    $sqlQues = "SELECT id,name FROM seminario WHERE state = 1";
    $conQues = mysqli_query($conexion,$sqlQues);

?>
<div class="col-md-12">
    <div class="card bg-info">
        <div class="card-header">
            <h4>Elaboracion de Preguntas:</h4>
        </div>
        <div class="card-body">
            <h4>MEDICINA INTERNA</h4>
           <form action="../logica/add_question.php" method="POST">
                <div class="row">
                    <input hidden type="text" name="program" value="MEDICINA INTERNA">
                    <div class="col-md-4">
                        <label for="">Seminario</label>
                        <select name="id_seminar" id="" class="form-control">
                            <?php
                                while($datesQues = mysqli_fetch_array($conQues)){
                            ?>
                                <option value="<?php echo $datesQues['id'] ?>"><?php echo $datesQues['name'] ?></option>

                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row quest mt-2">
                    <div class="form-group col-md-12" >
                        <label for="">Pregunta:</label><br>
                        <textarea style="width: 100%;" name="question" id="" cols="30" rows="10" class="form-cotrol"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Respuesta</label>
                        <input class="form-control" type="text" name="answer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-warning">Agregar</button>
                    </div>
                </div>
           </form>
        </div>
    </div>
</div>