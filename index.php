<?php session_start();
if (!$_SESSION) {
	unset($_SESSION['idu']);
	session_unset();
	session_destroy();
}
else{ ?>
	<script>
		if (navigator.userAgent.indexOf('Firefox')>0){
			window.location='main.php#';
		}
		else{
			window.location='main.php?#';
		}
	</script>
<?php } ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Identificación :: iService Workgroup Administrador</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="css/material-dashboard.css">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/nando-style.css">
	</head>
	<body class="dark-edition" id="comprobacion">
		<div class="col-md-12" style="padding-top: 70px;">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					​<img src="img/logo-white.png" class="img-fluid">
					<div class="content" style="padding-top: 40px;">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header card-header-success">
											<h4 class="card-title">Administración e información</h4>
											<p class="card-category">Identifícate para ingresar</p>
										</div>
										<div class="card-body">
											<div id="comprobacion">
												<form action="checking.php" method="POST" role="form" id="fr-check">
													<div class="row">
														<div class="col-md-8">
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group" style="padding-top: 30px;">
																		<label class="bmd-label-floating" style="padding-top: 30px;">Usuario</label>
																		<input type="text" class="form-control" name="nick" id="nick" required="required" onfocus="setphoto(this.value)">
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="form-group" style="padding-top: 30px;">
																		<label class="bmd-label-floating" style="padding-top: 30px;">Contraseña</label>
																		<input type="password" class="form-control" name="pass" required="required" onfocus="setphoto(nick.value)">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="form-group col-md-12">
																	<button type="submit" class="btn btn-success pull-right">Iniciar sesión</button>
																</div>
															</div>
														</div>
														<div class="col-md-4" id="img-usr">
															​<img src="img/logo-img.png" class="img-fluid">
														</div>
													</div>
													<div class="clearfix"></div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap-material-design.min.js"></script>
		<script src="js/pasive-events.js"></script>
		<script src="js/perfect-scrollbar.jquery.min.js"></script>
		<script async defer src="js/buttons.js"></script>
		<script src="js/chartist.min.js"></script>
		<script src="js/bootstrap-notify.js"></script>
		<script src="js/material-dashboard.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/sweetalert2.all.js"></script>
		<script>
			function setphoto(nusr){
				$('#img-usr').load('getimg.php?usr='+nusr);
			}

			$("#fr-check").submit(function(e) {
				e.preventDefault();
				var form = $(this);
				var url = form.attr('action');
				$.ajax({
					type: "POST",
					url: url,
					data: form.serialize(),
					success: function(data){
						$('#comprobacion').html(data);
					}
				});
			});
		</script>
	</body>
</html>