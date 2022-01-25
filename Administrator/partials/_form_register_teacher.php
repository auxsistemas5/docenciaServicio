<div class="col-sm-12">
    <div class="card  bg-info col-md-12">
        <div class="card-header">
            <h4>REGISTRAR DOCENTE</h4>
        </div>
        <div class="card-body">
            <form action="../logica/add_teacher.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="">Cedula:</label>
                        <input class="form-control" type="text" name="document" required>
                    </div>
                    <div class="col-md-3">
                        <label for="">Institución:</label>
                        <Select name="id_institution" class="form-control form-select">
                            <?php 
                             require '../logica/conexion.php';

                             $sqlD = "SELECT id,name FROM instituciones";
                             $resD = mysqli_query($conexion,$sqlD);                         
                            
                            while($mostrarD = mysqli_fetch_array($resD)){
                            ?>
                                <option class="" value="<?php echo $mostrarD['id'] ?>"><?php echo $mostrarD['name'] ?></option>                            
                            <?php
                            }
                            ?>
                        </Select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Fecha Inico:</label>
                        <input class="form-control" type="date" name="start" >
                    </div>
                    <div class="col-md-3">
                        <label for="">Fecha Finalización:</label>
                        <input class="form-control" type="date" name="end" >
                    </div>
                    <div class="col-md-3">
                        <label for="">Tipo de Vinculación:</label>
                        <select name="type_vinc" id="" class="form-control">
                            <option value="">NINGUNO</option>
                            <option value="AGREMIACIÓN/PROSALUD">AGREMIACIÓN/PROSALUD</option>
                            <option value="AGREMIACIÓN/PROENSALUD">AGREMIACIÓN/PROENSALUD</option>
                            <option value="AGREMIACIÓN/THAUS">AGREMIACIÓN/THAUS</option>
                            <option value="VINCULADO HMFS">VINCULADO HMFS</option>
                            <option value="EXTERNO IES">EXTERNO IE'S</option>
                            <option value="ASESOR">ASESOR</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Servicio:</label>
                        <Select name="type_teacher" class="form-control form-select">
                            <?php 
                             require '../logica/conexion.php';

                             $sqlS = "SELECT id,services_name FROM servicios";
                             $resS = mysqli_query($conexion,$sqlS);                         
                            
                            while($mostrarD = mysqli_fetch_array($resS)){
                            ?>
                                <option class="" value="<?php echo $mostrarD['services_name'] ?>"><?php echo $mostrarD['services_name'] ?></option>                            
                            <?php
                            }
                            ?>
                        </Select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Programa:</label>
                        <Select name="type_prog" class="form-control form-select">
                            <?php 
                             require '../logica/conexion.php';

                             $sqlP = "SELECT programas.id,programas.programs_name FROM programas";
                             $resP = mysqli_query($conexion,$sqlP);                         
                            
                            while($mostrar = mysqli_fetch_array($resP)){
                            ?>
                                <option class="" value="<?php echo $mostrar['programs_name'] ?>"><?php echo $mostrar['programs_name'] ?></option>                            
                            <?php
                            }
                            ?>
                        </Select>
                    </div>
                    <div class="col-md-4">
                        <label for="">Correo:</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="col-md-4">
                        <label for="">Telefono:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <label for="">Observaciones:</label>
                        <input type="text" class="form-control" name="observation">
                    </div>
                    <div class="col-md-3">
                        <label for="">Califica Estudiantes:</label>
                        <select name="calification" class="form-control">
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                </div>
                <div class="row col-md-3 mt-2">
                    <div>
                        <button class="btn btn-success">Crear</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>