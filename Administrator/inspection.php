<?php
    session_start();

    if (!isset($_SESSION['document']) && !isset($_SESSION['password'])) {
        header('Location: ../index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>INSPECCIÓN</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <link rel="icon" href="https://www.hmfs.gov.co/wp-content/uploads/2021/08/cropped-ISOTIPOF-8-1-32x32.png" sizes="32x32">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    

    <!-- Favicon icon -->

    <!-- font css -->
    <link rel="stylesheet" href="../assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/customizer.css">
    

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<?php require 'partials/_nav.php';?>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- support-section start -->
                <?php require 'partials/_inspection.php';  ?>
                <!-- support-section end -->
                <!-- customer-section start -->
                
            
                <!-- customer-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
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
<script src="../assets/js/pages/chart-apex.js"></script>


<!-- custom-chart js -->
<script src="../assets/js/pages/dashboard-sale.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"defer></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>

<script>
    $(document).ready( function () {
        $('#reporte').DataTable();
    } );
</script>
