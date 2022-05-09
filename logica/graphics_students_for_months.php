<?php
    require 'conexion.php';
    $mes = $_POST['mes'];
    
    if($mes == "ENERO"){

        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-01-01' AND '2022-01-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        //SLECCIONA LOS DATOS DEL USUARIO POR MES//
        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-01-01' AND '2022-01-31' AND registro.anulated = 0";
        
        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }

        
    }
    if($mes == "FEBRERO"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-02-01' AND '2022-02-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-02-01' AND '2022-02-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }        
    }
    if($mes == "MARZO"){
        

        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-03-01' AND '2022-03-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }
  
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-03-01' AND '2022-03-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }    
    }
    if($mes == "ABRIL"){

        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-04-01' AND '2022-04-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-04-01' AND '2022-04-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }    
    }
    if($mes == "MAYO"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-05-01' AND '2022-05-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-05-01' AND '2022-05-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "JUNIO"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-06-01' AND '2022-06-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-06-01' AND '2022-06-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "JULIO"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-07-01' AND '2022-07-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-07-01' AND '2022-07-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "AGOSTO"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-08-01' AND '2022-08-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-08-01' AND '2022-08-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "SEPTIEMBRE"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-09-01' AND '2022-09-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-09-01' AND '2022-09-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "OCTUBRE"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-10-01' AND '2022-10-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-10-01' AND '2022-10-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "NOVIEMBRE"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-11-01' AND '2022-11-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-11-01' AND '2022-11-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }
    if($mes == "DICIEMBRE"){
        $sqlservicio = "SELECT registro.id_service,servicios.services_name FROM registro INNER JOIN servicios ON registro.id_service = servicios.id WHERE registro.admission_date BETWEEN '2022-12-01' AND '2022-12-31' AND registro.anulated = 0";
        
        $resServi = mysqli_query($conexion, $sqlservicio);
        $urg=0;$ped=0;$mi=0;$gin=0;$cr=0;$tox=0;$cir=0;$exu=0;$urgp = 0;$psi=0;$fact=0;$arc=0;$geh=0;$far=0;$jur=0;$nut=0;$inb=0;$uci=0;$sep=0;$lab=0;$sst=0;

        while($servicios = mysqli_fetch_array($resServi)){
            $id_servicio = $servicios['id_service'];

            $sqlNombre = "SELECT servicios.services_name FROM servicios WHERE servicios.id = $id_servicio";
            $sqlRes = mysqli_query($conexion, $sqlNombre);
            $nombre = mysqli_fetch_array($sqlRes);

            if($nombre['services_name'] == "URGENCIAS"){
                $urg++;
            }
            if($nombre['services_name'] == "PEDIATRÍA"){
                $ped++;
            }
            if($nombre['services_name'] == "MEDICINA INTERNA"){
                $mi++;
            }
            if($nombre['services_name'] == "GINECOLOGÍA"){
                $gin++;
            }
            if($nombre['services_name'] == "CENTRO REGULADOR"){
                $cr++;
            }
            if($nombre['services_name'] == "TOXICOLOGÍA"){
                $tox++;
            }
            if($nombre['services_name'] == "CIRUGÍA"){
                $cir++;
            }
            if($nombre['services_name'] == "EXPERIENCIA DE USUARIO"){
                $exu++;
            }
            if($nombre['services_name'] == "URGENCIAS PEDIÁTRICAS"){
                $urgp++;
            }
            if($nombre['services_name'] == "PSICOLOGÍA"){
                $psi++;
            }
            if($nombre['services_name'] == "FACTURACIÓN"){
                $fact++;
            }
            if($nombre['services_name'] == "ARCHIVO"){
                $arc++;
            }
            if($nombre['services_name'] == "GESTIÓN HUMANA"){
                $geh++;
            }
            if($nombre['services_name'] == "FARMACIA"){
                $far++;
            }
            if($nombre['services_name'] == "JURÍDICA"){
                $jur++;
            }
            if($nombre['services_name'] == "NUTRICION"){
                $nut++;
            }
            if($nombre['services_name'] == "INGENIERÍA BIOMÉDICA"){
                $inb++;
            }
            if($nombre['services_name'] == "UCI"){
                $uci++;
            }
            if($nombre['services_name'] == "SEGURIDAD DEL PACIENTE"){
                $sep++;
            }
            if($nombre['services_name'] == "LABORATORIO"){
                $lab++;
            }
            if($nombre['services_name'] == "SEGURIDAD Y SALUD EN EL TRABAJO"){
                $sst++;
            }

            
        }

        $sql = "SELECT *
        FROM registro INNER JOIN usuarios
        ON registro.id_user = usuarios.id
        WHERE registro.admission_date BETWEEN '2022-12-01' AND '2022-12-31' AND registro.anulated = 0";

        $res = mysqli_query($conexion,$sql);
        $a1 = 0;
        $censa = 0; $unac = 0;$unimi = 0;$cur = 0;$fumc=0;$itm = 0;$iumafis = 0;$sena=0;$ucc = 0;$udea=0;$upb =0;$fusm =0;$icct =0;$edesa=0;
        while($month1 = mysqli_fetch_array($res)){
            $id = $month1['id']; 
            $a1++;

            $consultaInsti = "SELECT instituciones.acronym FROM usuarios INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id WHERE usuarios.id = $id";
            $verificar = mysqli_query($conexion, $consultaInsti);
            $dato = mysqli_fetch_array($verificar);

            if($dato['acronym'] == "CENSA S.A"){
                $censa++;
            }
            if($dato['acronym'] == "UNAC"){
                $unac++;
            }
            if($dato['acronym'] == "UNIMINUTO"){
                $unimi++;
            }
            if($dato['acronym'] == "CUR"){
                $cur++;
            }
            if($dato['acronym'] == "FUMC"){
                $fumc++;
            }
            if($dato['acronym'] == "ITM"){
                $itm++;
            }
            if($dato['acronym'] == "IUMAFIS"){
                $iumafis++;
            }
            if($dato['acronym'] == "SENA"){
                $sena++;
            }
            if($dato['acronym'] == "UCC"){
                $ucc++;
            }
            if($dato['acronym'] == "UDEA"){
                $udea++;
            }
            if($dato['acronym'] == "UPB"){
                $upb++;
            }
            if($dato['acronym'] == "FUSM"){
                $fusm++;
            }
            if($dato['acronym'] == "ICCT"){
                $icct++;
            }
            if($dato['acronym'] == "EDESA S.A."){
                $edesa++;
            }

        }
    }

    //echo $a1 . "<br>";
    echo "<input hidden id='censa' value='$censa'></input> <br>";
    echo  "<input hidden id='unac' value='$unac'> <br>";
    echo "<input hidden id='unimi' value='$unimi'> <br>";
    echo  "<input hidden id='cur' value='$cur'> <br>";
    echo "<input hidden id='fumc' value='$fumc'> <br>";
    echo "<input hidden id='itm' value='$itm'> <br>";
    echo "<input hidden id='sena' value='$sena'> <br>";
    echo "<input hidden id='ucc' value='$ucc'> <br>";
    echo "<input hidden id='udea' value='$udea'> <br>";
    echo "<input hidden id='upb' value='$upb'> <br>";
    echo "<input hidden id='fusm' value='$fusm'> <br>";
    echo "<input hidden id='icct' value='$icct'> <br>";
    echo "<input hidden id='edesa' value='$edesa'> <br>";

    echo "<input hidden id='urg' value='$urg'> <br>";
    echo "<input hidden id='ped' value='$ped'> <br>";
    echo "<input hidden id='mi' value='$mi'> <br>";
    echo "<input hidden id='gin' value='$gin'> <br>";
    echo "<input hidden id='cr' value='$cr'> <br>";
    echo "<input hidden id='tox' value='$tox'> <br>";
    echo "<input hidden id='cir' value='$cir'> <br>";
    echo "<input hidden id='exu' value='$exu'> <br>";
    echo "<input hidden id='urgp' value='$urgp'> <br>";
    echo "<input hidden id='psi' value='$psi'> <br>";
    echo "<input hidden id='fact' value='$fact'> <br>";
    echo "<input hidden id='arc' value='$arc'> <br>";
    echo "<input hidden id='geh' value='$geh'> <br>";
    echo "<input hidden id='far' value='$far'> <br>";
    echo "<input hidden id='jur' value='$jur'> <br>";
    echo "<input hidden id='nut' value='$nut'> <br>";
    echo "<input hidden id='inb' value='$inb'> <br>";
    echo "<input hidden id='uci' value='$uci'> <br>";
    echo "<input hidden id='sep' value='$sep'> <br>";
    echo "<input hidden id='lab' value='$lab'> <br>";
    echo "<input hidden id='sst' value='$sst'> <br>";


?>
<script>
    censa = document.getElementById('censa').value;
    unimi = document.getElementById('unimi').value;
    cur = document.getElementById('cur').value;
    fumc = document.getElementById('fumc').value;
    itm = document.getElementById('itm').value;
    sena = document.getElementById('sena').value;
    ucc = document.getElementById('ucc').value;
    udea = document.getElementById('udea').value;
    upb = document.getElementById('upb').value;
    fusm = document.getElementById('fusm').value;
    icct = document.getElementById('icct').value;
    edesa = document.getElementById('edesa').value;

    urg = document.getElementById('urg').value;
    ped = document.getElementById('ped').value;
    mi = document.getElementById('mi').value;
    gin = document.getElementById('gin').value;
    ped = document.getElementById('ped').value;
    cr = document.getElementById('cr').value;
    tox = document.getElementById('tox').value;
    cir = document.getElementById('cir').value;
    exu = document.getElementById('exu').value;
    urgp = document.getElementById('urgp').value;
    psi = document.getElementById('psi').value;
    fact = document.getElementById('fact').value;
    arc = document.getElementById('arc').value;
    geh = document.getElementById('geh').value;
    far = document.getElementById('far').value;
    jur = document.getElementById('jur').value;
    nut = document.getElementById('nut').value;
    inb = document.getElementById('inb').value;
    uci = document.getElementById('uci').value;
    sep = document.getElementById('sep').value;
    lab = document.getElementById('lab').value;
    sst = document.getElementById('sst').value;
   



    console.log(censa);


    
    
    $(function() {
        var options = {
            chart: {
                height: 450,
                type: 'pie',
            },
            labels: ['URG','PED','MEI','GIN','CTR','TOX','CIR','EXU','UGP','PSI','FAC','ARC','GEH','FAR','JUR','NUT','INB','UCI','SGP','LAB','SST'],
            series: [parseInt(urg),parseInt(ped),parseInt(mi), parseInt(gin),parseInt(cr),parseInt(tox),parseInt(cir),parseInt(exu),parseInt(urgp),parseInt(psi),parseInt(fact),parseInt(arc),parseInt(geh),parseInt(far),parseInt(jur),parseInt(nut),parseInt(inb),parseInt(uci),parseInt(sep),parseInt(lab),parseInt(sst)],
            colors: ["#7267EF", "#7993D6", "#04C8C8", "#ffa21d", "#EA4D4D",'#E3A530','#96B738','#BED679','#38B790','#389EB7','#65CAF9','#BA65F9','#F9659D'],
            legend: {
                show: true,
                position: 'bottom',
            },
            dataLabels: {
                enabled: true,
                dropShadow: {
                    enabled: false,
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        }
        var chart = new ApexCharts(
            document.querySelector("#datos"),
            options
        );
        chart.render();
    });
/*
    $(function() {
            var options = {
                chart: {
                    height: 330,
                    type: 'pie',
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ["#176399","#0e9e4a", "#7267EF"],
                stroke: {
                    show: true,
                    width: 0.8,
                    colors: ['transparent']
                },
                series: [{
                    name: '',
                    data: [parseInt(urg),parseInt(ped),parseInt(mi), parseInt(gin),parseInt(cr),parseInt(tox),parseInt(cir),parseInt(exu),parseInt(urgp),parseInt(psi),parseInt(fact),parseInt(arc),parseInt(geh),parseInt(far),parseInt(jur),parseInt(nut),parseInt(inb),parseInt(uci),parseInt(sep),parseInt(lab),parseInt(sst)]
                }],
                xaxis: {
                    categories: ['URG','PED','MEI','GIN','CTR','TOX','CIR','EXU','UGP','PSI','FAC','ARC','GEH','FAR','JUR','NUT','INB','UCI','SGP','LAB','SST'],
                },
                yaxis: {
                    title: {
                        text: 'SERVICIOS'
                    }
                },
                fill: {
                    opacity: 0.8

                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "" + val + ""
                        }
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#datos2"),
                options
            );
            chart.render();
        });*/
</script>

