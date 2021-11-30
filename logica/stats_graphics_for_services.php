<?php
    require 'conexion.php';
    $sqP1 = "SELECT * FROM servicios";
    $exP1 = mysqli_query($conexion,$sqP1);

    //muestra los estudiantes registrados en el programa 1
    $sqlP = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 1 AND registro.anulated = 0";
    $resP = mysqli_query($conexion,$sqlP);
    $a2 = 0;

    while($datesP = mysqli_fetch_array($resP)){
        $a2++;
    }

    //muestra los estudiantes registrados en el programa 2
    $sqlP1 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 2 AND registro.anulated = 0";
    $resP1 = mysqli_query($conexion,$sqlP1);
    $b2 = 0;
    while($datesP1 = mysqli_fetch_array($resP1)){
        $b2++;
    }

    //muestra los estudiantes registrados en el programa 3
    $sqlP2 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 3 AND registro.anulated = 0";
    $resP2 = mysqli_query($conexion,$sqlP2);
    $c2 = 0;
    while($datesP1 = mysqli_fetch_array($resP2)){
        $c2++;
    }

    //muestra los estudiantes registrados en el programa 4
    $sqlP3 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 4 AND registro.anulated = 0";
    $resP3 = mysqli_query($conexion,$sqlP3);
    $d2 = 0;
    while($datesP1 = mysqli_fetch_array($resP3)){
        $d2++;
    }

    //muestra los estudiantes registrados en el programa 6
    $sqlP5 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 6 AND registro.anulated = 0";
    $resP5 = mysqli_query($conexion,$sqlP5);
    $f2 = 0;
    while($datesP1 = mysqli_fetch_array($resP5)){
        $f2++;
    }

    //muestra los estudiantes registrados en el programa 7
    $sqlP6 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 7 AND registro.anulated = 0";
    $resP6 = mysqli_query($conexion,$sqlP6);
    $g2 = 0;
    while($datesP1 = mysqli_fetch_array($resP6)){
        $g2++;
    }

    //muestra los estudiantes registrados en el programa 9
    $sqlP8= "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 9 AND registro.anulated = 0";
    $resP8 = mysqli_query($conexion,$sqlP8);
    $i2 = 0;
    while($datesP1 = mysqli_fetch_array($resP8)){
        $i2++;
    }

    //muestra los estudiantes registrados en el programa 10
    $sqlP9 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 10 AND registro.anulated = 0";
    $resP9 = mysqli_query($conexion,$sqlP9);
    
    $j2 = 0;

    while($datesP1 = mysqli_fetch_array($resP9)){
        $j2++;
    }
    

    //muestra los estudiantes registrados en el programa 11
    $sqlP10 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 11 AND registro.anulated = 0";
    $resP10 = mysqli_query($conexion,$sqlP10);
    $k2 = 0;
    
    while($datesP1 = mysqli_fetch_array($resP10)){
        $k2++;
    }
    

    //muestra los estudiantes registrados en el programa 12
    $sqlP11 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 12 AND registro.anulated = 0";
    $resP11 = mysqli_query($conexion,$sqlP11);
    $l2 = 0;
    while($datesP1 = mysqli_fetch_array($resP11)){
        $l2++;
    }

    //muestra los estudiantes registrados en el programa 13
    $sqlP12 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 13 AND registro.anulated = 0";
    $resP12 = mysqli_query($conexion,$sqlP12);
    $m2 = 0;
    while($datesP1 = mysqli_fetch_array($resP12)){
        $m2++;
    }

    //muestra los estudiantes registrados en el programa 14
    $sqlP13 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 14 AND registro.anulated = 0";
    $resP13 = mysqli_query($conexion,$sqlP13);
    $n2 = 0;
    while($datesP1 = mysqli_fetch_array($resP13)){
        $n2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP14 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 15 AND registro.anulated = 0 AND registro.anulated = 0";
    $resP14 = mysqli_query($conexion,$sqlP14);
    $o2 = 0;
    while($datesP1 = mysqli_fetch_array($resP14)){
        $o2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP15 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 16 AND registro.anulated = 0 AND registro.anulated = 0";
    $resP15 = mysqli_query($conexion,$sqlP15);
    $p2 = 0;
    while($datesP1 = mysqli_fetch_array($resP15)){
        $p2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP16 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 17 AND registro.anulated = 0 AND registro.anulated = 0";
    $resP16 = mysqli_query($conexion,$sqlP16);
    $q2 = 0;
    while($datesP1 = mysqli_fetch_array($resP16)){
        $q2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP17 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id= 18 AND registro.anulated = 0 AND registro.anulated = 0";
    $resP17 = mysqli_query($conexion,$sqlP17);
    $r2 = 0;
    while($datesP1 = mysqli_fetch_array($resP17)){
        $r2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP18 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 19 AND registro.anulated = 0";
    $resP18 = mysqli_query($conexion,$sqlP18);
    $s2 = 0;
    while($datesP1 = mysqli_fetch_array($resP18)){
        $s2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP19 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 20 AND registro.anulated = 0";
    $resP19 = mysqli_query($conexion,$sqlP19);
    $t2 = 0;
    while($datesP1 = mysqli_fetch_array($resP19)){
        $t2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP20 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 21 AND registro.anulated = 0";
    $resP20 = mysqli_query($conexion,$sqlP20);
    $u2 = 0;
    while($datesP1 = mysqli_fetch_array($resP20)){
        $u2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP21 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 22 AND registro.anulated = 0";
    $resP21 = mysqli_query($conexion,$sqlP21);
    $v2 = 0;
    while($datesP1 = mysqli_fetch_array($resP21)){
        $v2++;
    }

    //muestra los estudiantes registrados en el programa 15
    $sqlP22 = "SELECT registro.id FROM registro INNER JOIN servicios
    ON registro.id_service = servicios.id WHERE servicios.id = 23 AND registro.anulated = 0";
    $resP22 = mysqli_query($conexion,$sqlP22);
    $w2 = 0;
    while($datesP1 = mysqli_fetch_array($resP22)){
        $w2++;
    }


    echo "<input value='$a2' id='program1' hidden/>";
    echo "<input value='$b2' id='program2'hidden/>";
    echo "<input value='$c2' id='program3'hidden/>";
    echo "<input value='$d2' id='program4'hidden/>";
    echo "<input value='$f2' id='program6'hidden/>";
    echo "<input value='$g2' id='program7'hidden/>";
    echo "<input value='$i2' id='program9'hidden/>";
    echo "<input value='$j2' id='program10'hidden/>";
    echo "<input value='$k2' id='program11'hidden/>";
    echo "<input value='$l2' id='program12'hidden/>";
    echo "<input value='$m2' id='program13'hidden/>";
    echo "<input value='$n2' id='program14'hidden/>";
    echo "<input value='$o2' id='program15'hidden/>";
    echo "<input value='$p2' id='program16'hidden/>";
    echo "<input value='$q2' id='program17'hidden/>";
    echo "<input value='$r2' id='program18'hidden/>";
    echo "<input value='$s2' id='program19'hidden/>";
    echo "<input value='$t2' id='program20'hidden/>";
    echo "<input value='$u2' id='program21'hidden/>";
    echo "<input value='$v2' id='program22'hidden/>";
    echo "<input value='$w2' id='program23'hidden/>";
    




?>