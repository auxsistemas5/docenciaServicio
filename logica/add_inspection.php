<?php
    require 'conexion.php';

    $fecha = $_POST['fecha'];
    $sede = $_POST['sede'];


    if(isset($_POST['mi1'])){
        $mi = "1";
    }else{
        $mi = "0";
    }
    if(isset($_POST['mi2'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }
    if(isset($_POST['mi3'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }
    if(isset($_POST['mi4'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }
    if(isset($_POST['mi5'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }
    if(isset($_POST['mi6'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }
    if(isset($_POST['mi7'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }
    if(isset($_POST['mi8'])){
        $mi = $mi."-"."1";
    }else{
        $mi = $mi."-"."0";
    }

    if(isset($_POST['qr1'])){
        $qr ="1";
    }else{
        $qr = "0";
    }
    if(isset($_POST['qr2'])){
        $qr = $qr."-"."1";
    }else{
        $qr = $qr."-"."0";
    }

    if(isset($_POST['pd1'])){
        $pd ="1";
    }else{
        $pd = "0";
    }
    if(isset($_POST['pd2'])){
        $pd = $pd."-"."1";
    }else{
        $pd = $pd."-"."0";
    }
    if(isset($_POST['ph1'])){
        $ph = "1";
    }else{
        $ph = "0";
    }
    if(isset($_POST['urg1'])){
        $urg = "1";
    }else{
        $urg = "0";
    }
    if(isset($_POST['ce1'])){
        $ce = "1";
    }else{
        $ce = "0";
    }
    if(isset($_POST['admin1'])){
        $admin = "1";
    }else{
        $admin = "0";
    }
    if(isset($_POST['otros1'])){
        $otros = "1";
    }else{
        $otros = "0";
    }

    $mi_observacion = $_POST['obser_mi'];
    $qr_observacion = $_POST['obser_qr'];
    $pd_observacion = $_POST['obser_pd'];
    $ph_observacion = $_POST['obser_ph'];
    $urg_observacion = $_POST['obser_urg'];
    $ce_observacion = $_POST['obser_ce'];
    $admin_observacion = $_POST['obser_admin'];
    $otros_observacion = $_POST['obser_otros'];
    $hallazgos = $_POST['hallazgos'];
    $medidas = $_POST['medidas'];
    $institucion = $_POST['institucion'];
    $todasIns = $institucion[0]."-".$institucion[1]."-".$institucion[2]."-".$institucion[3]."-".$institucion[4]."-".$institucion[5]."-".$institucion[6]."-".$institucion[7]."-".$institucion[8];


    echo "fecha: ".$fecha . "<br>";//fecha de la inspeccion
    echo "sede:".$sede . "<br>";//variable que recoge la sede del formulario
    echo "mi: ".$mi.  "<br>"; // variable que recoge todos los valores chequeados
    echo "qr: ".$qr .  "<br>";
    echo "pd: ".$pd. "<br>";
    echo "ph: ".$ph .  "<br>";
    echo "urg: ".$urg. "<br>";
    echo "ce: ".$ce .  "<br>";
    echo "admin: ".$admin. "<br>";
    echo "otros: ".$otros .  "<br>";
    echo "observacion_mi: ".$mi_observacion . "<br>";
    echo "observacion_qr: ".$qr_observacion .  "<br>";
    echo "observacion_pd: ".$pd_observacion .  "<br>";

    echo "observacion_ph: ".$ph_observacion . "<br>";
    echo "observacion_urg: ".$urg_observacion .  "<br>";
    echo "observacion_ce: ".$ce_observacion .  "<br>";
    echo "observacion_admin: ".$admin_observacion .  "<br>";
    echo "observacion_otros: ".$otros_observacion .  "<br>";

    echo "hallazgos: ".$hallazgos .  "<br>";
    echo "medidas: ".$medidas .  "<br>";

    echo "institucion: ".$todasIns .  "<br>";

    $sql = "INSERT INTO inspeccion(fecha, sede, inspeccion_mi, observacion_mi, inspeccion_qr, observacion_qr, inspeccion_pd, observacion_pd, inspeccion_ph, observacion_ph, inspeccion_ur, observacion_ur, inspeccion_cex, observacion_cex, inspeccion_adm, observacion_adm, inspeccion_otros, observacion_otros, hallazgos, medidas, instituciones_encontradas) VALUES(
        '$fecha',
        '$sede',
        '$mi',
        '$mi_observacion',
        '$qr',
        '$qr_observacion',
        '$pd',
        '$pd_observacion',
        '$ph',
        '$ph_observacion',
        '$urg',
        '$urg_observacion',
        '$ce',
        '$ce_observacion',
        '$admin',
        '$admin_observacion',
        '$otros',
        '$otros_observacion',
        '$hallazgos',
        '$medidas',
        '$todasIns'
    )";

    $sqlres = mysqli_query($conexion, $sql);

    if(!$sqlres){
        echo '<script language="javascript">alert("Error, no se pudo procesar el registro");window.location.href="../Administrator/inspection.php"</script>';
    }else if($sqlres){
        echo '<script language="javascript">alert("Se Creo el reporte con exito");window.location.href="../Administrator/inspection.php"</script>';
    }



?>