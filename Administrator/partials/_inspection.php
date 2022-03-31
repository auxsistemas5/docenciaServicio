<div class="col-md-12">
    <div class ="card">
        <div class="card-body">
            <h4><b>INSPECCION DE ESTUDIANTES</b></h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#staticBackdrop">
            AGREGAR NUEVA INSPECCION
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">NUEVA INSPECCIÓN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../logica/add_inspection.php" method="POST">

                        <div class="modal-body ">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">FECHA DE INSPECCION:</label>
                                        <input type="date" name="fecha" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">SEDE:</label>
                                        <Select class="form-control" name="sede">
                                            <option value="N/A">SELECCIONE</option>
                                            <option value="AUTOPISTA">AUTOPISTA</option>
                                            <option value="NIQUIA">NIQUIA</option>
                                        </Select>
                                    </div>
                                </div>
                                <h5 class="mt-4">ÁREAS DE INSPECCION</h5>
                                <div class="row">
                                    <div class="col-md-12">

                                        <label for=""><b>MEDICINA INTERNA:</b> </label>  
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="mi1" type="checkbox" id="inlineCheckbox1" value="">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi2"  value="">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi3" value="">
                                            <label class="form-check-label" for="inlineCheckbox2">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi4" value="">
                                            <label class="form-check-label" for="inlineCheckbox2">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi5" value="">
                                            <label class="form-check-label" for="inlineCheckbox2">5</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi6" value="">
                                            <label class="form-check-label" for="inlineCheckbox2">6</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi7" value="">
                                            <label class="form-check-label" for="inlineCheckbox2">7</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mi8" value="">
                                            <label class="form-check-label" for="inlineCheckbox2">8</label>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="obser_mi" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>QUIRÚRGICAS:</b> </label> 
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="qr1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="qr2">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <input type="text" class="form-control" name="obser_qr" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>PEDIATRÍA:</b> </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="pd1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="pd2">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <input type="text" class="form-control" name="obser_pd" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>PREHOSPITALIZACIÓN:</b> </label> 
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ph1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="obser_ph" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>URGENCIAS:</b> </label> 
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="urg1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <input type="text" class="form-control" name="obser_urg" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>CONSULTA EXTERNA:</b> </label> 
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ce1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <input type="text" class="form-control" name="obser_ce"  placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>ÁREA ADMINISTRATIVA:</b> </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="admin1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <input type="text" class="form-control" name="obser_admin" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>OTROS:</b> </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="otros1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <input type="text" class="form-control" name="obser_otros" placeholder="OBSERVACIONES">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>HALLAZGOS ENCONTRADOS: </b> </label> 
                                        <textarea class="form-control" name="hallazgos" id="" cols="10" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>MEDIDAS A TOMAR: </b> </label> 
                                        <textarea class="form-control" name="medidas" id="" cols="10" rows="5"></textarea>
                                    </div>
                                </div>
                                <?php
                                    require '../logica/conexion.php';

                                    $sql = "SELECT * FROM instituciones";
                                    $verificarInsti = mysqli_query($conexion, $sql);
                                    $verificarInsti1 = mysqli_query($conexion, $sql);
                                    $verificarInsti2 = mysqli_query($conexion, $sql);
                                    $verificarInsti3 = mysqli_query($conexion, $sql);
                                    $verificarInsti4 = mysqli_query($conexion, $sql);
                                    $verificarInsti5 = mysqli_query($conexion, $sql);
                                    $verificarInsti6 = mysqli_query($conexion, $sql);
                                    $verificarInsti7 = mysqli_query($conexion, $sql);
                                    $verificarInsti8 = mysqli_query($conexion, $sql);
                                ?>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for=""><b>INSTITUCIONES EDUCATIVAS: </b> </label> 
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos = mysqli_fetch_array($verificarInsti)){
                                                    ?>
                                                        <option value="<?php echo $datos['acronym'] ?>"><?php echo $datos['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos1 = mysqli_fetch_array($verificarInsti1)){
                                                    ?>
                                                        <option value="<?php echo $datos1['acronym'] ?>"><?php echo $datos1['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos2 = mysqli_fetch_array($verificarInsti2)){
                                                    ?>
                                                        <option value="<?php echo $datos2['acronym'] ?>"><?php echo $datos2['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos3 = mysqli_fetch_array($verificarInsti3)){
                                                    ?>
                                                        <option value="<?php echo $datos3['acronym'] ?>"><?php echo $datos3['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos4 = mysqli_fetch_array($verificarInsti4)){
                                                    ?>
                                                        <option value="<?php echo $datos4['acronym'] ?>"><?php echo $datos4['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos5 = mysqli_fetch_array($verificarInsti5)){
                                                    ?>
                                                        <option value="<?php echo $datos5['acronym'] ?>"><?php echo $datos5['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos6 = mysqli_fetch_array($verificarInsti6)){
                                                    ?>
                                                        <option value="<?php echo $datos6['acronym'] ?>"><?php echo $datos6['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos7 = mysqli_fetch_array($verificarInsti7)){
                                                    ?>
                                                        <option value="<?php echo $datos7['acronym'] ?>"><?php echo $datos7['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="institucion[]" id="" class="form-control">
                                            <?php
                                                while($datos8 = mysqli_fetch_array($verificarInsti8)){
                                                    ?>
                                                        <option value="<?php echo $datos8['acronym'] ?>"><?php echo $datos8['name']?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                            <button type="submit "class="btn btn-success">AGREGAR</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <?php  
                $sqlcon = "SELECT * FROM inspeccion";
                $sqlres = mysqli_query($conexion, $sqlcon);
            ?>
            <div class="mt-4">
                <div class="table">
                    <h4>REPORTES GENERADOS</h4>
                    <table id="reporte">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>SEDE</th>
                                <th>FECHA</th>
                                <th>OPCIONES</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                while($datos = mysqli_fetch_array($sqlres)){
                                    ?>
                                        <tr>
                                            <td><?php echo $datos['id'] ?></td>
                                            <td><?php echo $datos['sede'] ?></td>
                                            <td><?php echo $datos['fecha'] ?></td>
                                            <td><a href="ver_inspection.php?id=<?php echo $datos['id'] ?>" class="btn btn-success btn-sm">VER REPORTE</a></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>