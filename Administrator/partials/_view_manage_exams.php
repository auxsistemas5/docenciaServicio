<?php

    require '../logica/conexion.php';
    //valida si todos los elementos estan activos para mostrar si esta activo o inactivo+
    $sqlEX1 = "SELECT id,state FROM examen WHERE month = 'DICIEMBRE' AND state = 1 ";
    $resEX1 = mysqli_query($conexion,$sqlEX1);

    $activos1 = 0;
    while($mostrarEx1 = mysqli_fetch_array($resEX1)){
        $activos1++;
    }

    $sqlEXt2 = "SELECT * FROM examen WHERE month = 'DICIEMBRE'";
    $resEXt2 = mysqli_query($conexion,$sqlEXt2);

    $totalesDiciembre = 0;
    while($mostrarEx2 = mysqli_fetch_array($resEXt2)){
        $totalesDiciembre++;
        
    }
    if($activos1 == $totalesDiciembre){
        $estado1_a = "ACTIVO";
        $es1_a = 1;
        $estado2_a = "INACTIVO";
        $es2_a = 0;
    }else{
        $estado1_a = "INACTIVO";
        $es1_a = 0;
        $estado2_a = "ACTIVO";
        $es2_a = 1;
    }



    //valida si todos los elementos estan activos para mostrar si esta activo o inactivo+
    $sqlEX = "SELECT id,state FROM examen WHERE month = 'ENERO' AND state = 1 ";
    $resEX = mysqli_query($conexion,$sqlEX);

    $activos = 0;
    while($mostrarEx = mysqli_fetch_array($resEX)){
        $activos++;
        $Estado = $mostrarEx['state'];
    }

    $sqlEXt = "SELECT * FROM examen WHERE month = 'ENERO'";
    $resEXt = mysqli_query($conexion,$sqlEXt);

    $totalesEnero = 0;
    while($mostrarEx = mysqli_fetch_array($resEXt)){
        $totalesEnero++;
        $Estado = $mostrarEx['state'];
    }
    if($activos == $totalesEnero){
        $estado1 = "ACTIVO";
        $es1 = 1;
        $estado2 = "INACTIVO";
        $es2 = 0;
    }else{
        $estado1 = "INACTIVO";
        $es1 = 0;
        $estado2 = "ACTIVO";
        $es2 = 1;
    }
    //-----------------------------------------------------------------------------//



    

?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Manejo de Examenes</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>MES</th>
                            <th>ESTADO</th>
                            <th>ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="../logica/update_exam.php" method="POST">
                            <tr>
                                <td>
                                    <input hidden class="form-control" type="text" value="DICIEMBRE" name="month" >DICIEMBRE 2021
                                </td>
                                <td>
                                    <select name="state" id="" class="form-control">
                                        <option value="<?php echo $es1_a; ?>"><?php echo $estado1_a;?></option>
                                        <option value="<?php echo $es2_a;?>"><?php echo $estado2_a;?></option>
                                    </select>
                                </td>
                                <td><button class="btn btn-info"><i class="fa fa-check"></i></button></td>
                            </tr>
                        </form>
                        <form action="../logica/update_exam.php" method="POST">
                            <tr>
                                <td>
                                    <input hidden class="form-control" type="text" value="ENERO" name="month" >ENERO 2022
                                </td>
                                <td>
                                    <select name="state" id="" class="form-control">
                                        <option value="<?php echo $es1; ?>"><?php echo $estado1;?></option>
                                        <option value="<?php echo $es2;?>"><?php echo $estado2;?></option>
                                    </select>
                                </td>
                                <td><button class="btn btn-info"><i class="fa fa-check"></i></button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>