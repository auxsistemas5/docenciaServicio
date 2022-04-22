<?php

    require 'conexion.php';

    $sql = "SELECT * FROM chat ";
    $verificar = mysqli_query($conexion,$sql);

    if($verificar){

        while($mensajes = mysqli_fetch_array($verificar)){
            if($mensajes['remitente'] == "JARLEY SALDARRIAGA"){
                ?>
                <div class ="col-md-6 ml-auto alert alert-primary bg-primary">
                    <p class="text-white "><?php echo $mensajes['remitente'] ?></p>
                    <p class="text-white mt-3"><?php echo $mensajes['mensaje'] ?></p>
                </div>
                <?php
                
            }else{
                if( $mensajes['remitente'] == "KATERINE HENAO TORO"){
                    ?>
                    <div class ="col-md-6 ml-auto alert alert-info bg-info">
                        <p class="text-white "><?php echo $mensajes['remitente'] ?></p>
                        <p class="text-white mt-3"><?php echo $mensajes['mensaje'] ?></p>
                    </div>
                    <?php
                }else{
                    if( $mensajes['remitente'] == "ANYELA VANESSA GÒMEZ BUILES"){
                        ?>
                        <div class ="col-md-6 ml-auto alert alert-primary bg-primary">
                            <p class="text-white "><?php echo $mensajes['remitente'] ?></p>
                            <p class="text-white mt-3"><?php echo $mensajes['mensaje'] ?></p>
                        </div>
                        <?php
                    }else{

                        ?>
                        <div class="card bg-info col-md-6  ml-auto">
                            
                            <div class="card-body">
                                <p><?php echo $mensajes['remitente'] ?></p>
                                <p class="text-white mt-3"><?php echo $mensajes['mensaje'] ?></p>
                            </div>
                        </div>
                        <?php
                    }

                }
            }
        }
    }


?>