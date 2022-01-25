<div class="col-md-12">

    <div class='card-body'>
        <div class="table-responsive">
            <table class='' border="1px solid" style="width:auto;">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>PREGUNTA</th>
                        <th>RESPUESTA</th>
                        <th>ACCIÓN</th>
                    </tr>
                
                </thead>
                <tbody>
                    
                    
                        <?php
                            while($datesTable = mysqli_fetch_array($consulTab)){
                        ?>
                            <form action="../logica/delete_question.php" method="POST">
                                <tr>
                                    <td hidden><input type='text' name='num' value='<?php echo $datesTable[0] ?>'></td >
                                    <td  class="text-white"><?php echo $datesTable[2] ?></td>
                                    <td  class="text-white"><?php echo $datesTable[3] ?></td>
                                    <td><button class='btn btn-danger' type='submit'><i class='fa fa-trash'></i></button></td>
                                </tr>
                            </form>
                        
                        <?php
                            }
                            
                            
                        ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
                                            


