<?php
    require 'conexion.php';

    //ingresos por el programa #1
    $sqlG1 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 1 AND registro.anulated = 0";

    $resG1 = mysqli_query($conexion,$sqlG1);

    $a3 = 0;
    while($dates4 = mysqli_fetch_array($resG1)){
        $a3++;
    }

    //ingresos por el programa #2
    $sqlG2 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 2 AND registro.anulated = 0";

    $resG2 = mysqli_query($conexion,$sqlG2);

    $b3 = 0;
    while($dates4 = mysqli_fetch_array($resG2)){
        $b3++;
    }

    //ingresos por el programa #3
    $sqlG3 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 3 AND registro.anulated = 0";

    $resG3 = mysqli_query($conexion,$sqlG3);

    $c3 = 0;
    while($dates4 = mysqli_fetch_array($resG3)){
        $c3++;
    }

    //ingresos por el programa #4
    $sqlG4 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 4 AND registro.anulated = 0";

    $resG4 = mysqli_query($conexion,$sqlG4);

    $d3 = 0;
    while($dates4 = mysqli_fetch_array($resG4)){
        $d3++;
    }

    //ingresos por el programa #5
    $sqlG5 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 5 AND registro.anulated = 0";

    $resG5 = mysqli_query($conexion,$sqlG5);

    $e3 = 0;
    while($dates4 = mysqli_fetch_array($resG5)){
        $e3++;
    }

    //ingresos por el programa #6
    $sqlG6 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 6 AND registro.anulated = 0";

    $resG6 = mysqli_query($conexion,$sqlG6);

    $f3 = 0;
    while($dates4 = mysqli_fetch_array($resG6)){
        $f3++;
    }

    //ingresos por el programa #7
    $sqlG7 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 7 AND registro.anulated = 0";

    $resG7 = mysqli_query($conexion,$sqlG7);

    $g3 = 0;
    while($dates4 = mysqli_fetch_array($resG7)){
        $g3++;
    }

    //ingresos por el programa #8
    $sqlG8 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 8 AND registro.anulated = 0";

    $resG8 = mysqli_query($conexion,$sqlG8);

    $h3 = 0;
    while($dates4 = mysqli_fetch_array($resG8)){
        $h3++;
    }

    //ingresos por el programa #9
    $sqlG9 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 9 AND registro.anulated = 0";

    $resG9 = mysqli_query($conexion,$sqlG9);

    $i3 = 0;
    while($dates4 = mysqli_fetch_array($resG9)){
        $i3++;
    }

    //ingresos por el programa #10
    $sqlG10 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 10 AND registro.anulated = 0";

    $resG10 = mysqli_query($conexion,$sqlG10);

    $j3 = 0;
    while($dates4 = mysqli_fetch_array($resG10)){
        $j3++;
    }

    //ingresos por el programa #11
    $sqlG11 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 11 AND registro.anulated = 0";

    $resG11 = mysqli_query($conexion,$sqlG11);

    $k3 = 0;
    while($dates4 = mysqli_fetch_array($resG11)){
        $k3++;
    }
    //ingresos por el programa #12
    $sqlG12 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 12 AND registro.anulated = 0";

    $resG12 = mysqli_query($conexion,$sqlG12);

    $l3 = 0;
    while($dates4 = mysqli_fetch_array($resG12)){
        $l3++;
    }
    //ingresos por el programa #13
    $sqlG13 = "SELECT registro.id FROM registro INNER JOIN programas
    ON registro.id_program = programas.id WHERE programas.id = 13 AND registro.anulated = 0";

    $resG13 = mysqli_query($conexion,$sqlG13);

    $m3 = 0;
    while($dates4 = mysqli_fetch_array($resG13)){
        $m3++;
    }


    echo "<input value='$a3' id='prog1' hidden/>";
    echo "<input value='$b3' id='prog2' hidden/>";
    echo "<input value='$c3' id='prog3' hidden/>";
    echo "<input value='$d3' id='prog4' hidden/>";
    echo "<input value='$e3' id='prog5' hidden/>";
    echo "<input value='$f3' id='prog6' hidden/>";
    echo "<input value='$g3' id='prog7' hidden/>";
    echo "<input value='$h3' id='prog8' hidden/>";
    echo "<input value='$i3' id='prog9' hidden/>";
    echo "<input value='$j3' id='prog10' hidden/>";
    echo "<input value='$k3' id='prog11' hidden/>";
    echo "<input value='$l3' id='prog12' hidden/>";
    echo "<input value='$m3' id='prog13' hidden/>";
    




?>