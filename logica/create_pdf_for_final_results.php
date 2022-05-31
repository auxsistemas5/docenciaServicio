<?php
    
    session_start();
    if (!isset($_SESSION['document']) && !isset($_SESSION['password'])) {
        header('Location: ../index.php');
        exit();
    }

    
    ob_start();
    require 'conexion.php';
    $name = $_GET['name'];
    $conocimiento = $_GET['conocimiento'];
    $actitud = $_GET['actitud'];
    $seminario = $_GET['seminario'];
    $fecha = $_GET['fecha'];
    /*echo $name."<br>";
    echo $conocimiento."<br>";
    echo $actitud."<br>";
    echo $seminario;*/

    $sqlInstitucion = "SELECT usuarios.id, instituciones.name,usuarios.document FROM usuarios INNER JOIN instituciones on usuarios.id_institucion = instituciones.id where usuarios.username = '$name' ";

    $sqlverificarInstitucion = mysqli_query($conexion, $sqlInstitucion);
    $institucion = mysqli_fetch_array($sqlverificarInstitucion);
    $id_user = $institucion['id'];

    $sqlRegistro = "SELECT * FROM registro where registro.finish_date = '$fecha' and registro.id_user = '$id_user' ";
    $sqlverificarRegistro = mysqli_query($conexion, $sqlRegistro);
    $registro = mysqli_fetch_array($sqlverificarRegistro);
    $id_service = $registro['id_service'];

    $sqlnombreservicio = "SELECT * from servicios where id='$id_service' ";
    $verificarservicio = mysqli_query($conexion,$sqlnombreservicio);
    $nombreServicio = mysqli_fetch_array($verificarservicio);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    

    <!-- font css -->
    
    <link rel="stylesheet" href="../assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="..assets/css/customizer.css">

    
    
    

</head>

<body class="">

    <table border="1" style="border-collapse: collapse; align-items: center;">
        <tbody  style="">

            <tr align="CENTER">
                <td ROWSPAN="4"  ><img src="../resources/logo 1.jpeg" width="170px" height="80px"></td>
                <td ROWSPAN="4"  ><B>HOJA DE EVALUACIÓN MEDICOS INTERNOS</B></td>
                <td><b>CODIGO: </b> HMFS-FT-0717</td>
            </tr>
            <TR align="CENTER">
                <td><b>VERSIÓN: </b> 01</td>
            </TR align="CENTER">
            <tr align="CENTER">
                <td><b>FECHA ACTUALIZACIÓN: </b> NOVIEMBRE 2021</td>
            </tr>
            <TR align="CENTER">
                <td><B>ELABORÓ: </B> DOCENCIA SERVICIO</td>
            </TR>
        </tbody>
    </table>

    <br>

    <div class="container">
        <p><b>Fecha Inicio: </b> <?php echo $registro['admission_date'] ?> </p>
        <p><b>Fecha Finalización:</b> <?php echo $fecha ?></p>
        <p><b>Servicio:</b> <?php echo $nombreServicio['services_name'] ?></p> 
        <p><b>Nombre Completo:</b> <?php echo $name ?></p>
        <p><b>Documento de Identidad:</b> <?php echo $institucion['document'] ?> </p>
        <p><b>Institución Educativa: </b> <?php echo $institucion['name'] ?></p> <br>

        <table border="1" style="border-collapse: collapse; align-items: center;">
            <thead>
                <tr >
                    <th>ITEM A EVALUAR</th>
                    <th>%</th>
                    <th>NOTA</th>
                    <th>EVALUADOR</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width=""><b>PARCIAL FINAL</b></td>
                    <td width="" align="CENTER"><b>30%</b></td>
                    <td width=""></td>
                    <td width="" align="CENTER">Docencia Servicio</td>
                    
                </tr>
                <tr>
                    <td><B>CONOCIMIENTOS:</B> Capacidad de análisis, evaluación en rondas, profundidad y saberes académicos </td>
                    <td align="CENTER"><B>25%</B></td>
                    <td align="center"><?php echo $conocimiento ?></td>
                    <td align="CENTER">Especialista del Servicio</td>
                    
                </tr>
                <tr>
                    <td><b>ACTIVIDADES ACADÉMICAS:</b> Participación y desarrollo de seminarios,charlas, capacitaciones,actualizaciones, etc.</td>
                    <td align="CENTER"><B>20%</B></td>
                    <td align="center"><?php echo $seminario ?></td>
                    <td align="CENTER">Docencia Servicio</td>
                    
                </tr>
                <tr>
                    <td><b>ACTITUD:</b> Trato humanizado, comunicación asertiva, interacción con el personal asistencial</td>
                    <td align="CENTER"><B>15%</B></td>
                    <td align="center"><?php echo $actitud ?></td>
                    <td align="CENTER">Especialista del Servicio</td>
                    
                </tr>
                <tr>
                    <td><B>CUMPLIMIENTO DE LA NORMA:</B> Reglamento de prácticas, políticas instituciones</td>
                    <td align="CENTER"><b>10%</b></td>
                    <td></td>
                    <td align="CENTER">Jefe del Servicio</td>
                    
                </tr>
                <tr>
                    <td align="CENTER"><b>NOTA FINAL</b></td>
                    <td align="center"><b>100%</b></td>
                    <td></td>
                    <td></td>
                    
                </tr>
            </tbody>
        </table>
        <br>
        <p>OBSERVACIONES: _________________________________________________________________________</p>
        <p>___________________________________________________________________________________________</p>
        <p>___________________________________________________________________________________________</p>

        <br>
        

        <p><img src="../resources/firma.jpeg" width="300px" height="120px"></p>
        
        
        
    </div>
	
      

    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="../assets/js/plugins/clipboard.min.js"></script>
    <script src="../assets/js/uikit.min.js"></script>

<!-- Apex Chart -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>



<!-- custom-chart js -->
<script src="../assets/js/pages/dashboard-sale.js"></script>
</body>

</html>


<?php

$html = ob_get_clean();
//echo $html;

require '../Administrator/libraries/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

//para mostrar imagenes
$dompdf = new Dompdf();


$options = $dompdf->getOptions ();
$options->set('isRemoteEnabled', true);
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

//$dompdf->setPaper('A4','landscape'); para documentos en HORIZONTAL

$dompdf->render();

$dompdf->stream("estudiantes_activos.pdf", array("Attachment" => false));


?>