

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Resultados</h4>
        </div>
        <div class="card-body">
            <?php
                require '../logica/conexion.php';
                $nombre = $_SESSION['username'];
                $sqlResultado = "SELECT result FROM resultados where student = '$nombre' ";
                $consultaResultado = mysqli_query($conexion,$sqlResultado);
                if($consultaResultado){
                    $datoResultado = mysqli_fetch_array($consultaResultado);
                    if($datoResultado > 0 or $datoResultado != null){
                        echo "
                        Calificación: <br>
                        <p></p>
                        ".$datoResultado[0];
                        ;
                    }else{
                        echo "<p>No hay Resultados hasta ahora!</p>";
                    }
                }
            ?>
        </div>
    </div>
</div>