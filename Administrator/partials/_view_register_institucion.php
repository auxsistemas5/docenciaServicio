<?php
    require '../logica/conexion.php';
    $quer = "SELECT id,name FROM instituciones ";
    $execute = mysqli_query($conexion,$quer);
?>


<div class="col-sm-12">
    <div class="card  bg-info col-md-12">
        <div class0="">

            <div class="">
                <div class="">
                    <h3 class="card-header"><b>VER INSTITUCIONES</b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md">
                    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="container mt-2">
                            <label class="text-white" for="">Buscar Datos de la Institucion</label>
                            <div class=" form-group input-group">
                                <Select name="name" class="form-control form-select">
                                <?php 
                                while($mostrar = mysqli_fetch_array($execute)){
                                ?>
                                    <option class="" value="<?php echo $mostrar['id'] ?>"><?php echo $mostrar['name'] ?></option>                            
                                <?php
                                }
                                ?>
                                </Select>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                    </button>        
                                    
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                <?php
                    if(!empty($_POST['name'])){
                        $nombre = $_POST['name'];

                        $bs = "SELECT * FROM instituciones WHERE id = '$nombre'";
                        $d = mysqli_query($conexion,$bs);
                        $res = mysqli_fetch_array($d);

                        

                        $consul = "SELECT instituciones_contacto.id,instituciones_contacto.name,instituciones_contacto.position,instituciones_contacto.email,instituciones_contacto.phone, instituciones.logo
                        FROM instituciones_contacto
                        INNER JOIN instituciones
                        ON instituciones_contacto.id_institucion = instituciones.id WHERE instituciones.id = $res[0]";

                        $res1 = mysqli_query($conexion,$consul);
                        

                        if($res > 0){
                            echo "
                            <div class='col-sm-12'>
                                <div class='card mt-3 '>
                                    <div class='card-header'>
                                        <h4>INFORMACION DE LA INSTITUCION</h4>
                                    </div>
                                    <div class='card-body'>
                                        <div class=' '>
                                            <form action='../logica/update_institution.php' method='POST'  enctype='multipart/form-data'>
                                                <div class='row'>
                                                    <div class='col-md-3'>
                                                        <img src='$res[11]' width='120px' height='120px'  style='border-radius:0px;border:2px solid #black;'>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <input name='id' value='$res[0]' hidden>
                                                    <div class='col-md-6'>
                                                        <label for=''>Nombre</label>
                                                        <input name='name' class='form-control' type='text' value='$res[1]' required>
                                                    </div>
                                                    <div class='col-md-3'>
                                                        <label for=''>Acronimo(Siglas)</label>
                                                        <input name='acronym' class='form-control' type='text' value='$res[2]'required>
                                                    </div>
                                                    <div class='col-md-3'>
                                                        <label for=''>Telefono</label>
                                                        <input name='phone' class='form-control' type='text' value='$res[5]'>
                                                    </div>
                                                </div>
                                                <div class='row '>
                                                    <div class='col-md-4'>
                                                        <label for=''>Nit</label>
                                                        <input name='nit' class='form-control' type='text' value='$res[6]'required>
                                                    </div>
                                                    <div class='col-md-4'>
                                                        <label for=''>Direccion</label>
                                                        <input name='direction' class='form-control' type='text' value='$res[7]'>
                                                    </div>
                                                    <div class='col-md-4'>
                                                        <label for=''>Programas</label>
                                                        <input name='programs' class='form-control' type='text' value='$res[8]'>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4'>
                                                        <label for=''>Inicio Convenio</label>
                                                        <input name='agreement' class='form-control' type='text' value='$res[3]'required>
                                                    </div>
                                                    <div class='col-md-4'>
                                                        <label for=''>Final Convenio</label>
                                                        <input name='finish_agreement' class='form-control' type='text' value='$res[4]'>
                                                    </div>
                                                    <div class='col-md-4'>
                                                        <label for=''>Sede</label>
                                                        <input name='campus' class='form-control' type='text' value='$res[9]'>
                                                    </div>
                                                </div> <br>
                                                <div class='row'>
                                                    <div class='col-md-5'>
                                                        <label for=''><b>Actualizar Logo</b></label>
                                                        <input type='file' name='file' >
                                                    </div>
                                                </div>
                                                <div class='row mt-2'>
                                                    <div class='col-md-4'>
                                                        
                                                        <button class='btn btn-success' type='submit'>Actualizar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            ";
                            require '_view_doc_institutions_table.php';
                            require '_view_contact_table.php';
                            require '_add_institution_contact.php';
                            require '_upload_document_institution.php';
                        }else{
                            echo "no se pueden ver los datos correspondientes";
                        }

                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>