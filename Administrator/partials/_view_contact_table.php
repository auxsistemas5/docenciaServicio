

<div class='col-lg-12'>
    <div class='card  bg-light '>
        <div class='card-header'>
            <h4>CONTACTO</h4>
        </div>
        <!-- /.panel-heading -->
        <div class='card-body'>
            <div class='table-responsive'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th hidden>ID</th>
                            <th>NOMBRE</th>
                            <th>CARGO</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>ACCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="../logica/delete_contact_institution.php" method="POST">
                            <?php 
                            while($dates = mysqli_fetch_array($res1)){
                            ?> 
                                
                            <tr>
                            
                                <td hidden><input name="id" type="text" value="<?php echo $dates['id']?>"></td>
                                <td><?php echo $dates['name']?></td>
                                <td><?php echo $dates['position']?></td>
                                <td><?php echo $dates['phone']?></td>
                                <td><?php echo $dates['email']?></td>
                                <td><button class="btn btn-danger"><i data-feather="trash-2"></button></td>
                            <?php
                            }
                            ?>
                        </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!-- /.table-responsive -->
        </div>
    <!-- /.panel-body -->
    </div>
<!-- /.panel -->
</div>