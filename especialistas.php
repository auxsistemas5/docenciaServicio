

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Inicio Sesion</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<link rel="icon" href="https://www.hmfs.gov.co/wp-content/uploads/2021/08/cropped-ISOTIPOF-8-1-32x32.png" sizes="32x32">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<script language="JavaScript">
        window.history.forward();
    </script>

	<!-- Favicon icon -->

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/font-awsome-pro/css/pro.min.css">
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/customizer.css">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<form method="POST" action="logica/logearEspecialista.php" class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="resources/logo 2.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Inicio Sesion</h4>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i data-feather="file"></i></span>
							</div>
							<input type="text" name="document" class="form-control" placeholder="Documento">
						</div>
						
						<button class="btn btn-block btn-success mb-4">Entrar</button>
						<p hidden class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
	</form>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>

</body>

</html>

