
<div class='col-lg-12'>
    <div class='card  bg-light '>
        <div class='card-header'>
            <h4>DOCUMENTACIÓN</h4>
        </div>
        <!-- /.panel-heading -->
        <div class='card-body table-border-style'>
            <div class='table-responsive'>
                <table class='table'>
                    <thead>
                        <tr class="table-active">
                            <th hidden>ID</th>
                            <th>TIPO DE ARCHIVO</th>
                            <th>ARCHIVO</th>
                            <th>ACCIÓN</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <div>
                            <?php 
                            while($mostrar = mysqli_fetch_array($consulta5)){
                            ?>
                            
                            <tr class="table-info">
                                <td hidden><input type="text" name="id" value="<?php echo $mostrar['id']?>"></td>
                                <td><?php echo $mostrar['type_document'] ?></td>
                                <td><a href="<?php echo $mostrar['file'] ?>" target="_blank" rel="noopener noreferrer">Ver Documento</a></td>

                                
                                     <td><a href="../logica/delete_documentation_user.php?id=<?php echo $mostrar['id']?>" class="btn btn-danger"><i data-feather="trash-2"></a></td>
                                
                            </tr>
                            <?php
                            }
                            ?>
                        </div>
                    </tbody>
                </table>
            </div>
        <!-- /.table-responsive -->
        </div>
    <!-- /.panel-body -->
    </div>
<!-- /.panel -->
                                    </div>
                                        