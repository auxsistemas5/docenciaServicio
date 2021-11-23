<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
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
                    
                    
					

				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
            <div class="mt-2 mr-auto pc-mob-drp">
                <img src="../resources/logo 2.jpeg" width="200" height="50">
            </div>
			<div class="ml-auto">
				<ul class="list-unstyled">
					
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							
							<span>
								<span class="user-name"><?php echo $_SESSION['username'];?></span>
								<span class="user-desc">Estudiante</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
							
							
							<a href="../logica/salir.php" class="dropdown-item">
								<i data-feather="power"></i>
								<span>Salir</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>
</div>