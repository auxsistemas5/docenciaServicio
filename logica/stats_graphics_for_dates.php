<?php

    require 'conexion.php';
    //muestra los estudiantes ingresados por el mes de enero
    $sql = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-01-01' AND '2021-01-31' AND registro.anulated = 0";

    $res = mysqli_query($conexion,$sql);
    $a1 = 0;
    while($month1 = mysqli_fetch_array($res)){
        $a1++;
    }

    //muestra los estudiantes ingresados por el mes de febrero
    $sqlD = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-02-01' AND '2021-02-28' AND registro.anulated = 0";

    $resD = mysqli_query($conexion,$sqlD);
    $b1 = 0;

    while($month2 = mysqli_fetch_array($resD)){
        $b1++;
    }

    //muestra los estudiantes ingresados por el mes de marzo
    $sqlD1 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-03-01' AND '2021-03-31' AND registro.anulated = 0";

    $resD1 = mysqli_query($conexion,$sqlD1);
    $c1 = 0;

    while($month3 = mysqli_fetch_array($resD1)){
        $c1++;
    }

    //muestra los estudiantes ingresados por el mes de abril
    $sqlD2 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-04-01' AND '2021-04-31' AND registro.anulated = 0";

    $resD2 = mysqli_query($conexion,$sqlD2);
    $d1 = 0;

    while($month4 = mysqli_fetch_array($resD2)){
        $d1++;
    }

    //muestra los estudiantes ingresados en el mes de mayo
    $sqlD3 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-05-01' AND '2021-05-31' AND registro.anulated = 0";

    $resD3 = mysqli_query($conexion,$sqlD3);
    $e1 = 0;

    while($month5 = mysqli_fetch_array($resD3)){
        $e1++;
    }

    //muestra los estudiantes ingresados en el mes de junio
    $sqlD4 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-06-01' AND '2021-06-30' AND registro.anulated = 0";

    $resD4 = mysqli_query($conexion,$sqlD4);
    $f1 = 0;

    while($month6 = mysqli_fetch_array($resD4)){
        $f1++;
    }

    //muestra los estudiantes ingresados en el mes de julio
    $sqlD5 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-07-01' AND '2021-07-31' AND registro.anulated = 0";

    $resD5 = mysqli_query($conexion,$sqlD5);
    $g1 = 0;

    while($month7 = mysqli_fetch_array($resD5)){
        $g1++;
    }

    //muestra los estudiantes ingresados en el mes de agosto

    $sqlD6 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-08-01' AND '2021-08-31' AND registro.anulated = 0";

    $resD6 = mysqli_query($conexion,$sqlD6);
    $h1 = 0;

    while($month7 = mysqli_fetch_array($resD6)){
        $h1++;
    }

    //muestra los estudiantes ingresados en el mes de septiembre
    $sqlD7 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-09-01' AND '2021-09-30' AND registro.anulated = 0";

    $resD7 = mysqli_query($conexion,$sqlD7);
    $i1 = 0;

    while($month7 = mysqli_fetch_array($resD7)){
        $i1++;
    }

    //muestra los estudiantes ingresados en el mes de octubre
    $sqlD8 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-10-01' AND '2021-10-31' AND registro.anulated = 0";

    $resD8 = mysqli_query($conexion,$sqlD8);
    $j1 = 0;

    while($month7 = mysqli_fetch_array($resD8)){
        $j1++;
    }

    //muestra los estudiantes ingresados en el mes de noviembre
    $sqlD9 = "SELECT *
    FROM registro
    INNER JOIN programas
    ON registro.id_program = programas.id WHERE registro.admission_date BETWEEN '2021-11-01' AND '2021-11-30' AND registro.anulated = 0";

    $resD9 = mysqli_query($conexion,$sqlD9);
    $k1 = 0;

    while($month8 = mysqli_fetch_array($resD9)){
        $k1++;
    }


    echo "<input value='$a1' id='mon1' hidden />";
    echo "<input value='$b1' id='mon2' hidden />";
    echo "<input value='$c1' id='mon3' hidden />";
    echo "<input value='$d1' id='mon4' hidden />";
    echo "<input value='$e1' id='mon5' hidden />";
    echo "<input value='$f1' id='mon6' hidden />";
    echo "<input value='$g1' id='mon7' hidden />";
    echo "<input value='$h1' id='mon8' hidden />";
    echo "<input value='$i1' id='mon9' hidden />";
    echo "<input value='$j1' id='mon10' hidden />";
    echo "<input value='$k1' id='mon11' hidden />";

?>