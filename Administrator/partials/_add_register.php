<div class="container">

    <div class='card card-danger'>
        <div class='row'>
            <div class='col-lg-12'>
                <form action='../logica/add_registers.php' method='POST'>
                    <div class='card-header panel-heading'>
                        <h4 >INGRESAR REGISTRO</h4>
                    </div>
                    <div class='card-body'>
                        <div class="row">
    
                            <div hidden><input type="text" name="id_user" value="<?php echo $id ?>" hidden></div>
                            <div class='col-md-4'>
                                <label for=''>Programa</label>
                                <select class='form-control form-select' name ='id_program'>
                                    <option>Seleccione</option> 
                                    <?php
                                    
        
                                        while($mostrar = mysqli_fetch_array($consulta3)){
                                        ?>   
                                            <option value="<?php echo $mostrar[0]?>"><?php echo $mostrar[1]?></option>
                                        <?php
                                        }
                                        
                                    ?>
                                    .
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label  class="form-label">Servicio</label>
                                <select class="form-control form-select" name ="id_service" >
                                    <option>Seleccione</option>
                                    <?php
                                        
        
                                        while($mostrar = mysqli_fetch_array($consulta4)){
                                            ?>   
                                            <option value="<?php echo $mostrar['0']?>"><?php echo $mostrar['1']?></option>
                                        <?php
                                        }
                                        ?>
        
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Docente:</label>
                                <input type="text" name="teacher" class="form-control">
                            </div>
                        </div>
                        <div class="row">
    
                            <div class="col-md-4">
                                <label for="">Tipo de Docente:</label>
                                <select name="type_teacher"  class="form-control">
                                        <option value="N/A">NINGUNO</option>
                                        <option value="AGREMIADO-PROSALUD">AGREMIADO-PROSALUD</option>
                                        <option value="AGREMIADO-PROENSALUD">AGREMIADO-PROENSALUD</option>
                                        <option value="AGREMIADO-THAUS">AGREMIADO-THAUS</option>
                                        <option value="VINCULADO">VINCULADO</option>
                                        <option value="EXTERNO IE'S">EXTERNO IE'S</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Fecha Inicio:</label>
                                <input type="date" name="admission_date" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Fecha Finalizacion:</label>
                                <input type="date" name="finish_date" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Observaciones</label>
                                    <input type="text" name="observations" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
        
                            <div class='col-md-3 panel-footer'>
                                <button type='submit'  class='btn btn-danger'>Crear Registro</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <br>
</div>