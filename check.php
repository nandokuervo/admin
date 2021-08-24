<?php session_start();
if (!$_SESSION) {
	unset($_SESSION['idu']);
	session_unset();
	session_destroy(); ?>
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>iService Workgroup :: Validación de usuario</title>
			<link rel="stylesheet" href="css/material-dashboard.css">
			<link rel="stylesheet" href="css/nando-style.css">
			<script src="js/jquery.js"></script>
			<script src="js/sweetalert2.all.js"></script>
		</head>
		<body>
			<script>
				Swal.fire({
					position: 'center',
					type: 'warning',
					title: "¡Tu sesión ha caducado!",
					showConfirmButton: false,
					timer: 1500
				}).then((result) => {
					window.location='index.php';
				});
			</script>
		</body>
	</html>
<?php }
else{
	require 'conex.php';
} ?>