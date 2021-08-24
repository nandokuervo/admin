<?php session_start();
unset($_SESSION['idu']);
session_unset();
session_destroy(); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Identificación :: iService Workgroup Administrador</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="css/material-dashboard.css">
		<link rel="stylesheet" href="css/nando-style.css">
	</head>
	<body class="dark-edition">
		<script src="js/jquery.js"></script>
		<script src="js/sweetalert2.all.js"></script>
		<script>
			Swal.fire({
				position: 'center',
				type: 'info',
				title: 'Sesión terminada, gracias por usar el admnistrador',
				showConfirmButton: false,
				timer: 1500
			}).then((result) => {
				window.location='index.php';
			});
		</script>
	</body>
</html>