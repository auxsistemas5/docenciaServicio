<?php
    require 'conexion.php';

    //estudiantes por fprmacion tecnica
    $sqlF = "SELECT usuarios.id FROM usuarios INNER JOIN registro ON 
    registro.id_user = usuarios.id WHERE usuarios.formation = 'TÉCNICO' AND registro.anulated = 0";
    $resF = mysqli_query($conexion,$sqlF);
    $a4 = 0;
    while($dates5 = mysqli_fetch_array($resF)){
        $a4++;
    }

    //estudiantes por fprmacion tecnologica
    $sqlF2 = "SELECT usuarios.id FROM usuarios INNER JOIN registro ON 
    registro.id_user = usuarios.id WHERE usuarios.formation = 'TÉCNOLOGO' AND registro.anulated = 0";
    $resF2 = mysqli_query($conexion,$sqlF2);
    $b4 = 0;
    while($dates5 = mysqli_fetch_array($resF2)){
        $b4++;
    }

    //estudiantes por fprmacion de pregrado
    $sqlF3 = "SELECT usuarios.id FROM usuarios INNER JOIN registro ON 
    registro.id_user = usuarios.id WHERE usuarios.formation = 'PREGRADO' AND registro.anulated = 0";
    $resF3 = mysqli_query($conexion,$sqlF3);
    $c4 = 0;
    while($dates5 = mysqli_fetch_array($resF3)){
        $c4++;
    }

    //estudiantes por fprmacion posgrado
    $sqlF4 = "SELECT usuarios.id FROM usuarios INNER JOIN registro ON 
    registro.id_user = usuarios.id WHERE usuarios.formation = 'POSTGRADO' AND registro.anulated = 0";
    $resF4 = mysqli_query($conexion,$sqlF4);
    $d4 = 0;
    while($dates5 = mysqli_fetch_array($resF4)){
        $d4++;
    }

    echo"<input value='$a4' id='for1' hidden/>";
    echo"<input value='$b4' id='for2' hidden/>";
    echo"<input value='$c4' id='for3' hidden/>";
    echo"<input value='$d4' id='for4' hidden/>";



?>