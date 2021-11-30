<?php
    
    session_start();
    if (!isset($_SESSION['document']) && !isset($_SESSION['password'])) {
        header('Location: ../index.php');
        exit();
    }

    $id = $_POST['id'];


    ob_start();

    include '../logica/conexion.php';

    $consu = "SELECT name FROM instituciones WHERE id = $id";
    $ex = mysqli_query($conexion,$consu);
    $rst = mysqli_fetch_array($ex);

    //permite obtener el programa actual en el que se encuentra el usuario segun el ultimo registro
    $obtener = "SELECT 
    registro.id,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email
    FROM(((registro INNER JOIN programas ON programas.id = registro.id_program) INNER JOIN usuarios ON usuarios.id = registro.id_user) INNER JOIN instituciones ON usuarios.id_institucion = instituciones.id)where registro.id = 
    (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id AND instituciones.id = $id AND usuarios.state = 1))
     ORDER BY usuarios.id";


/*SELECT username, document,usuarios.phone,position,formation,email
    FROM usuarios
    INNER JOIN instituciones
    ON usuarios.id_institucion = instituciones.id where instituciones.id = $id AND usuarios.state = 1*/

    $pintar = mysqli_query($conexion,$obtener);

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
        <tr>
            <th><img src="../resources/logo 2.jpeg" width="320" height="80"></th>
            <th>DOCENCIA SERVICIO</th>
            <th colspan="3"><?php setlocale(LC_ALL,"es_ES"); echo strftime("%A %d de %B del %Y");?></th>
            <!--<td><a src="http://<?php echo $_SERVER['HTTP_HOST'];?>/docenciaServicio/resources/logo3.png"></a></td>para recuperar la imagen del servidor-->
        </tr>
        
    </table> <br><br>
    <div class='col-lg-12 '>
        <div class='card bg-light '>
            <div class='card-header'>
                <h3 class=""><?php echo $rst[0];?> - ESTUDIANTES ACTIVOS</h3>
            </div>
            <!-- /.panel-heading -->
            <div class='card-body'>
                <div class='table-responsive'>
                    <table class='table' border="1" style="border-collapse: collapse;  align-items: center; width: 100%;">
                        <thead>
                            <tr>

                                <th>NOMBRE</th>
                                <th>DOCUMENTO</th>
                                <th>CARGO</th>
                                <th>PROGRAMA</th>
                                <th>CORREO:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($dates = mysqli_fetch_array($pintar)){
                            ?> 
                                
                            <tr>
                            
                                <td><?php echo $dates['username']?></td>
                                <td><?php echo $dates['document']?></td>
                                <td><?php echo $dates['position']?></td>
                                <td><?php echo $dates['programs_name']?></td>
                                <td><?php echo $dates['email']?></td>
                            <?php
                            }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <!-- /.table-responsive -->
            </div>
        <!-- /.panel-body -->
        </div>
    <!-- /.panel -->
    </div>
            <!-- [ Main Content ] end -->
      

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