<?php

    require 'conexion.php';

    $sql1 = "SELECT id FROM instituciones WHERE state = 1 ";

    $exe1 = mysqli_query($conexion,$sql1);
    
    $i = 0;$a = 0;$b =0;$c = 0; $d =0;$e=0;$f=0;$g=0;$h=0;$j=0;$k=0;$l=0;$m=0;$n=0;

    while($date = mysqli_fetch_array($exe1)){
        if($i == 0){
            $sql2 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe2 = mysqli_query($conexion,$sql2);

            $name1 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n1 = mysqli_query($conexion,$name1);
            $l1 = mysqli_fetch_array($n1);

            while($date1 = mysqli_fetch_array($exe2)){
                $a++;
            }
        }
        else if($i == 1 ){
            $sql3 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe3 = mysqli_query($conexion,$sql3);

            $name2 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n2 = mysqli_query($conexion,$name2);
            $l2 = mysqli_fetch_array($n2);

            while($date1 = mysqli_fetch_array($exe3)){
                $b++;
            }
        }
        else if($i == 2 ){
            $sql4 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe4 = mysqli_query($conexion,$sql4);

            $name3 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n3 = mysqli_query($conexion,$name3);
            $l3 = mysqli_fetch_array($n3);

            while($date1 = mysqli_fetch_array($exe4)){
                $c++;
            }
        }
        else if($i == 3 ){
            $sql5 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe5 = mysqli_query($conexion,$sql5);

            $name4 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n4 = mysqli_query($conexion,$name4);
            $l4 = mysqli_fetch_array($n4);

            while($date1 = mysqli_fetch_array($exe5)){
                $d++;
            }
        }
        else if($i == 4 ){
            $sql6 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe6 = mysqli_query($conexion,$sql6);

            $name5 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n5 = mysqli_query($conexion,$name5);
            $l5 = mysqli_fetch_array($n5);

            while($date1 = mysqli_fetch_array($exe6)){
                $e++;
            }
        }
        else if($i == 5 ){
            $sql7 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe7 = mysqli_query($conexion,$sql7);

            $name6 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n6 = mysqli_query($conexion,$name6);
            $l6 = mysqli_fetch_array($n6);

            while($date1 = mysqli_fetch_array($exe7)){
                $f++;
            }
        }
        else if($i == 6 ){
            $sql8 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe8 = mysqli_query($conexion,$sql8);

            $name7 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n7 = mysqli_query($conexion,$name7);
            $l7 = mysqli_fetch_array($n7);

            while($date1 = mysqli_fetch_array($exe8)){
                $g++;
            }
        }
        else if($i == 7 ){
            $sql9 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe9 = mysqli_query($conexion,$sql9);

            $name8 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n8 = mysqli_query($conexion,$name8);
            $l8 = mysqli_fetch_array($n8);

            while($date1 = mysqli_fetch_array($exe9)){
                $h++;
            }
        }
        else if($i == 8 ){
            $sql10 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe10 = mysqli_query($conexion,$sql10);

            $name9 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n9 = mysqli_query($conexion,$name9);
            $l9 = mysqli_fetch_array($n9);

            while($date1 = mysqli_fetch_array($exe10)){
                $j++;
            }
        }
        else if($i == 9 ){
            $sql11 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe11 = mysqli_query($conexion,$sql11);

            $name10 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n10 = mysqli_query($conexion,$name10);
            $l10 = mysqli_fetch_array($n10);

            while($date1 = mysqli_fetch_array($exe11)){
                $k++;
            }
        }
        else if($i == 10 ){
            $sql12 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe12 = mysqli_query($conexion,$sql12);

            $name11 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n11 = mysqli_query($conexion,$name11);
            $l11 = mysqli_fetch_array($n11);

            while($date1 = mysqli_fetch_array($exe12)){
                $l++;
            }
        }
        else if($i == 11 ){
            $sql13 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe13 = mysqli_query($conexion,$sql13);

            $name12 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n12 = mysqli_query($conexion,$name12);
            $l12 = mysqli_fetch_array($n12);

            while($date1 = mysqli_fetch_array($exe13)){
                $m++;
            }
        }
        else if($i == 12 ){
            $sql14 = "SELECT usuarios.id FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE instituciones.id = $i+1";
            $exe14 = mysqli_query($conexion,$sql14);

            $name13 = "SELECT name FROM instituciones WHERE id = $i+1";
            $n13 = mysqli_query($conexion,$name13);
            $l13 = mysqli_fetch_array($n13);

            while($date1 = mysqli_fetch_array($exe14)){
                $n++;
            }
        }
        
        $i++;
    }

    $i_r = $i;
    $i_r1 = $a;
    $i_r2 = $b;
    $i_r3 = $c;
    $i_r4 = $d;
    $i_r5 = $e;
    $i_r6 = $f;
    $i_r7 = $g;
    $i_r8 = $h;
    $i_r9 = $j;
    $i_r10 = $k;
    $i_r11 = $l;
    $i_r12 = $m;
    $i_r13 = $n;
    echo "<input value='$i_r' id='num_institution'hidden ></input>";

    echo "<input value='$l1[0]' id='name_institution'hidden >";
    echo "<input value='$i_r1' id='num_institution1'hidden >";

    echo "<input value='$l2[0]' id='name_institution2'hidden >";
    echo "<input value='$i_r2' id='num_institution2'hidden >";

    echo "<input value='$l3[0]' id='name_institution3'hidden >";
    echo "<input value='$i_r3' id='num_institution3'hidden >";

    echo "<input value='$i_r4' id='num_institution4'hidden >";
    echo "<input value='$l4[0]' id='name_institution4'hidden >";


    echo "<input value='$i_r5' id='num_institution5'hidden >";
    echo "<input value='$l5[0]' id='name_institution5'hidden >";

    echo "<input value='$i_r6' id='num_institution6'hidden >";
    echo "<input value='$l6[0]' id='name_institution6'hidden >";

    echo "<input value='$i_r7' id='num_institution7'hidden >";
    echo "<input value='$l7[0]' id='name_institution7'hidden >";

    echo "<input value='$i_r8' id='num_institution8'hidden >";
    echo "<input value='$l8[0]' id='name_institution8'hidden >";

    echo "<input value='$i_r9' id='num_institution9'hidden >";
    echo "<input value='$l9[0]' id='name_institution9'hidden >";

    echo "<input value='$i_r10' id='num_institution10'hidden >";
    echo "<input value='$l10[0]' id='name_institution10'hidden >";

    echo "<input value='$i_r11' id='num_institution11'hidden >";
    echo "<input value='$l11[0]' id='name_institution11'hidden >";

    echo "<input value='$i_r12' id='num_institution12'hidden >";
    echo "<input value='$l12[0]' id='name_institution12'hidden >";

    echo "<input value='$i_r13' id='num_institution13'hidden >";
    echo "<input value='$l13[0]' id='name_institution13'hidden >";
    

?>