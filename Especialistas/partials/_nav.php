<?php
    require '../logica/conexion.php';
    $nombre = $_SESSION['name'];
    $sqlNombre = $sql = "SELECT programas.programs_name FROM docentes INNER JOIN programas ON docentes.type_prog = programas.id WHERE docentes.name = '$nombre' ";

    $consultaNombre = mysqli_query($conexion,$sqlNombre);

    if($consultaNombre){
        $datoNombre = mysqli_fetch_array($consultaNombre);

    }


?>

<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical">ADMINISTRADOR</i>
			</a>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
            <div class="m-header ">
                <h2 hidden></h2>
                <h3></h3>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>NAVEGACION</label>
					</li>
					<li class="pc-item">
						<a href="dashboard.php" class="pc-link "><span class="pc-micon"><i data-feather="inbox"></i></span><span class="pc-mtext">Dashboard</span></a>
					</li>
                    <li class="pc-item">
						<a href="calificar.php" class="pc-link "><span class="pc-micon"><i data-feather="clipboard"></i></span><span class="pc-mtext">Calificar</span></a>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
            <div class="mt-2 mr-auto pc-mob-drp">
                <img src="../resources/hmfs.png" width="210" height="50">
            </div>
			<div class="ml-auto">
				<ul class="list-unstyled">
					
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							
							<span>
								<span class="user-name"><?php echo $_SESSION['name'];?></span>
								<span class="user-desc">ESPECIALISTA <?php //echo $datoNombre[0]  ?> </span>
							</span>
						</a>
						<a href="../logica/salir.php" class="dropdown-item">
							<i data-feather="power"></i>
							<span>Salir</span>
						</a>			
					</li>
				</ul>
			</div>

		</div>
	</header>
</div>