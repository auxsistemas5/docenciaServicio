<div class="container">

    <div class='card card-danger'>
        <div class='row'>
            <div class='col-lg-12'>
                <form  enctype="multipart/form-data" action="../logica/add_document_students.php" method="POST">
                    <div class='card-header panel-heading'>
                        <h4 >INGRESAR DOCUMENTACION</h4>
                    </div>
                    <div class='card-body'>
                        <div class="row">
    
                            <div hidden><input type="text" name="id_user" value="<?php echo $id ?>" hidden></div>
                            
                            <div class='col-md-6'>
                                <label for="archivo">Archivo</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <div class='col-md-6'>
                                <label for="archivo">Tipo de Archivo</label>
                                <select class="form-control" name="type_document" id="">
                                    <option value="hojadevida">Hoja de vida</option>
                                    <option value="vacunas">Vacunas</option>
                                    <option value="eps">Eps</option>
                                    <option value="arl">Arl</option>
                                    <option value="poliza">Poliza</option>
                                    <option value="documento">Documento Identidad</option>
                                    <option value="anticuerpos">Anticuerpos</option>
                                    <option value="adicional">Adicional</option>
                                    <option value="certificado">Certificado</option>
                                </select>
                            </div>
                            
                            
                            
                        </div>
                        
                        
                        <div class="row mt-2">
        
                            <div class='col-md-3 panel-footer'>
                                <button type='submit'  class='btn btn-warning'>Subir Documento</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <br>
</div>
 
