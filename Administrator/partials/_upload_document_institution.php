<div class="container">

    <div class='card card-danger'>
        <div class='row'>
            <div class='col-lg-12'>
                <form  enctype="multipart/form-data" action="../logica/add_document_institutions.php" method="POST">
                    <div class='card-header panel-heading'>
                        <h4 >INGRESAR DOCUMENTACION</h4>
                    </div>
                    <div class='card-body'>
                        <div class="row">
    
                            <div hidden><input type="text" name="id_institucion" value="<?php echo $res[0]?>" hidden></div>
                            
                            <div class='col-md-6'>
                                <label for="archivo">Archivo</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <div class='col-md-6'>
                                <label for="archivo">Tipo de Archivo</label>
                                <select class="form-control" name="type_file" id="">
                                    <option value="convenio">CONVENIO DOCENCIA SERVICIO</option>
                                    <option value="anexo_tecnico">ANEXO TECNICO</option>
                                    <option value="certificado_exitencial">CERTIFICADO EXISTENCIAL</option>
                                    <option value="autorizacion">RESOLUCION DE AUTORIZACION</option>
                                    <option value="cedula">CEDULA REPRESENTANTE LEGAL</option>
                                    <option value="aprobacion">APROBACION DEL PROGRAMA</option>
                                    <option value="poliza">POLIZA RESPONSABILIDAD CIVIL</option>
                                    <option value="reglamento">REGLAMENTO PRACTICAS FORMATIVAS</option>
                                    <option value="estatuto_docente">ESTATUTO DOCENTE</option>
                                    <option value="bioseguridad">PROTOCOLOS BIOSEGURIDAD</option>
                                    <option value="contraprestacion">CONTRAPRESTACION</option>
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