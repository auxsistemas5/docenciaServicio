<?php
    require '../logica/conexion.php';
    $id = $_GET['id'];

    $sql = "SELECT * FROM inspeccion where id = '$id' ";
    $sqlrespuesta = mysqli_query($conexion, $sql);
    $sqldatos = mysqli_fetch_array($sqlrespuesta);

    $mi = explode('-',$sqldatos['inspeccion_mi']);
    $qr = explode('-',$sqldatos['inspeccion_qr']);
    $pd = explode('-',$sqldatos['inspeccion_pd']);
    

?>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3>VER REPORTE</h3>
            <div class="row">
                <div class="col-md-6">
                    <label for="">FECHA DE INSPECCION:</label>
                    <input type="text"  class="form-control" value="<?php echo $sqldatos['fecha'] ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label for="">SEDE:</label>
                    <input type="text" class="form-control" value="<?php echo $sqldatos['sede'] ?>" disabled>
                </div>
            </div>
            <h5 class="mt-4">ÁREAS DE INSPECCION</h5>
            <div class="row">
                <div class="col-md-12">

                    <label for=""><b>MEDICINA INTERNA:</b> </label>  
                    <?php
                        if($mi[0] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }

                        if($mi[1] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">2</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">2</label>
                                </div>
                            <?php
                        }
                        if($mi[2] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">3</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">3</label>
                                </div>
                            <?php
                        }
                        if($mi[3] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">4</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">4</label>
                                </div>
                            <?php
                        }
                        if($mi[4] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">5</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">5</label>
                                </div>
                            <?php
                        }
                        if($mi[5] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">6</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">6</label>
                                </div>
                            <?php
                        }
                        if($mi[6] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">7</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">7</label>
                                </div>
                            <?php
                        }
                        if($mi[7] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                    <label class="form-check-label" for="inlineCheckbox1">8</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input selected" name="mi1" type="checkbox" id="inlineCheckbox1" value="" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">8</label>
                                </div>
                            <?php
                        }
                    ?>
                    
                    <input type="text" class="form-control" name="obser_mi" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_mi']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>QUIRÚRGICAS:</b> </label> 
                    <?php  
                        if($qr[0] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="qr1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="qr1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                        if($qr[1] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="qr2" >
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="qr2" checked>
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                            <?php
                        }
                    ?>
                    <input type="text" class="form-control" name="obser_qr" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_qr'] ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>PEDIATRÍA:</b> </label>
                    <?php
                        if($pd[0] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="pd1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="pd1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                        if($pd[1] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="pd2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="pd2" checked>
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                            <?php
                        }
                    ?>
                    
                    <input type="text" class="form-control" name="obser_pd" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_pd']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>PREHOSPITALIZACIÓN:</b> </label> 
                    <?php
                        if($sqldatos['inspeccion_ph'] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ph1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ph1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                    ?>
                    
                    
                    <input type="text" class="form-control" name="obser_ph" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_ph']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>URGENCIAS:</b> </label>
                    <?php  
                        if($sqldatos['inspeccion_ur'] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="urg1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="urg1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                    ?>
                    
                    <input type="text" class="form-control" name="obser_urg" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_ur']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>CONSULTA EXTERNA:</b> </label> 
                    <?php
                        if($sqldatos['inspeccion_cex'] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ce1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ce1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                    ?>
                    <input type="text" class="form-control" name="obser_ce"  placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_cex']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>ÁREA ADMINISTRATIVA:</b> </label>
                    <?php
                        if($sqldatos['inspeccion_adm'] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="admin1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="admin1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                    ?>
                    
                    <input type="text" class="form-control" name="obser_admin" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_adm']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>OTROS:</b> </label>
                    <?php
                        if($sqldatos['inspeccion_otros'] == 0){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="otros1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }else{
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="otros1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                            <?php
                        }
                    ?>
                    <input type="text" class="form-control" name="obser_otros" placeholder="OBSERVACIONES" value="<?php echo $sqldatos['observacion_otros']  ?>" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>HALLAZGOS ENCONTRADOS: </b> </label> 
                    <textarea class="form-control" name="hallazgos" id="" cols="10" rows="5"disabled><?php echo $sqldatos['hallazgos']?></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>MEDIDAS A TOMAR: </b> </label> 
                    <textarea class="form-control" name="medidas" id="" cols="10" rows="5" disabled><?php echo $sqldatos['medidas']?></textarea>
                </div>
            </div>

            <?php
                $insti = explode('-',$sqldatos['instituciones_encontradas']);

            ?>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label for=""><b>INSTITUCIONES EDUCATIVAS: </b> </label> 
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[0] ?>" class="form-control" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[1] ?>" class="form-control" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[2] ?>" class="form-control" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[3] ?>" class="form-control" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[4] ?>" class="form-control" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[5] ?>" class="form-control" disabled>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[6] ?>" class="form-control" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[7] ?>" class="form-control" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" value="<?php echo $insti[8] ?>" class="form-control" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
