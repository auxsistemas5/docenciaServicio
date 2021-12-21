<?php
    require '../logica/conexion.php';

    $csl = "SELECT documentos_instituciones.id,documentos_instituciones.id_institucion,documentos_instituciones.file,documentos_instituciones.type_file
    FROM documentos_instituciones
    INNER JOIN instituciones
    ON documentos_instituciones.id_institucion = instituciones.id WHERE instituciones.id = $res[0]";

    $rs = mysqli_query($conexion,$csl);

?>

<div class='col-lg-12'>
    <div class='card  bg-light col-md-12'>
        <div class='card-header'>
            <h4>DOCUMENTOS</h4>
        </div>
        <!-- /.panel-heading -->
        <div class='card-body'>
            <div class='table-responsive'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th hidden>ID</th>
                            <th>Archivo</th>
                            <th>Documento</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="../logica/delete_documentation_institution.php" method="POST">
                            <?php 
                            while($dates = mysqli_fetch_array($rs)){
                            ?> 
                                
                            <tr>
                                <?php //eliminar documentos por institución  ?>
                                <td hidden><input type="text" name="id" value="<?php echo $dates['id']?>"></td>
                                <td><?php echo $dates['type_file']?></td>
                                <td><a href="<?php echo $dates['file']?>" target="_blank" >Ver Documento</a></td>
                                <td><button class="btn btn-danger" type="submit"><i data-feather="trash-2"></button></td>

                            </tr>
                            <?php
                            }
                            ?>
                        </form>
                    </tbody>
                </table>
            </div>
        <!-- /.table-responsive -->
        </div>
    <!-- /.panel-body -->
    </div>
<!-- /.panel -->
</div>