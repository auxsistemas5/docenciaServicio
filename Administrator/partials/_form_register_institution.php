<div class="card text-white bg-info col-md-12">
                <div class="col-lg-12">
                    <div class="  panel panel-primary ">
                        <div class="card-header ">
                            <h3 class="text-white">REGISTRAR INSTITUCION:</h3>
                        </div>
                        <div class="card-body">
                            <form action="../logica/register_institution.php" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Nombre:</label>
                                            <input type="text" class="form-control" placeholder="" name="name" required>
                                        </div>
                                        <div class=" col-md-3">
                                            <label for="" class="form-label">Acronimo(Siglas):</label>
                                            <input type="text" class="form-control" name="acronym">
                                        </div>
                                        <div class=" col-md-3">
                                            <label for="" class="form-label">Inicio Convenio: </label>
                                            <input type="date" class="form-control" name=" required">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-3">
                                            <label for="" class="form-label">Fin de convenio:</label>
                                            <input type="date" class="form-control" name="finish_agreement" required>
                                        </div>

                                        
                                        <div class="form-group col-md-4">
                                            <label for="" class="form-label">Telefono:</label>
                                            <input type="text" class="form-control" name="phone" required>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="" class="form-label">NIT:</label>
                                            <input type="text" class="form-control" name="nit" required>
                                        </div>
                                    </div>
                                    <div class ="row">
                                        <div class="col-md-4">
                                            <label for="">Direccion:</label>
                                            <input type="text" class="form-control" name="direction" required>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Programas:</label required>
                                            <input type="text" class="form-control" name="programs">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputState" class="form-label">Sede:</label required>
                                            <input type="text" class="form-control" name="campus">
                                        </div> 
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <!--<div class="col-md-4">
                                        <label class="form-label">Fecha Ingreso:</label><br>
                                        <input type="date" name="">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Fecha Finalizacion:</label><br>
                                        <input type="date" name="">
                                        
                                    </div>-->
                                    
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-success" name="Guardar">Guardar</button>
                                        </div>
                                                
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 