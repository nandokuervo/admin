<?php require 'check.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Administración iService Workgroup</title>
		<link rel="stylesheet" href="css/material-dashboard.css">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/sweetalert2.css">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/nando-style.css">
		<style type="text/css">
			#div_carga{
				position:absolute;
				top:0;
				left:0;
				width:100%;
				height:100%;
				background: url(img/gris.png) repeat;
				display:none;
				z-index:1;
			}

			#cargador{
				width: 150px;
				height: 150px;
				position:absolute;
				top:50%;
				left: 50%;
				margin-top: -75px;
				margin-left: -75px;
			}
		</style>
		<script src="js/jquery.min.js"></script>
		<script src="js/sweetalert2.all.js"></script>
	</head>
	<body class="dark-edition">
		<div id="div_carga">
			<div id="cargador">
				<img src="img/crow.gif" class="img-responsive">
			</div>
		</div>

		<div class="wrapper">
			<div class="sidebar" data-color="orange" data-background-color="black" data-image="img/back-menu/side.jpg">
			<!-- Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
			Tip 2: you can also add an image using data-image tag -->
				<div class="logo">
					<a href="http://www.creative-tim.com" class="simple-text logo-normal">
						Administración <sup>iService</sup>
					</a>
				</div>

				<div class="sidebar-wrapper">
					<ul class="nav">
					<?php $cmd="SELECT * FROM menu";
					$getmen=$iswcnn->query($cmd);
					while ($setmen=$getmen->fetch_array()) {
						echo "<li class='nav-item' id='item-$setmen[0]' onclick="."activar('item-$setmen[0]')".">
							<a class='nav-link' href='#'>
								$setmen[1]
								<p>$setmen[2]</p>
							</a>
						</li>";
					} ?>
					</ul>
				</div>
			</div>

			<div class="main-panel">

				<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
					<div class="container-fluid">
						<div class="navbar-wrapper">
							<a class="navbar-brand" href="javascript:void(0)">Inicio</a>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
							<span class="sr-only">Toggle navigation</span>
							<span class="navbar-toggler-icon icon-bar"></span>
							<span class="navbar-toggler-icon icon-bar"></span>
							<span class="navbar-toggler-icon icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end">
							<form class="navbar-form" id="fr-buscar" method="POST" action="buscar.php">
								<div class="input-group no-border">
									<input type="text" value="" class="form-control" placeholder="Buscar...">
									<button type="submit" class="btn btn-default btn-round btn-just-icon">
										<i class="far fa-search" style="font-size: 18px;"></i>
										<div class="ripple-container"></div>
									</button>
								</div>
							</form>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="javascript:void(0)">
										<i class="fad fa-tachometer-alt-fast fa-2x"></i>
										<p class="d-lg-none d-md-block">
											Stats
										</p>
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fad fa-bells fa-2x"></i>
										<span class="notification">5</span>
										<p class="d-lg-none d-md-block">
											Some Actions
										</p>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
										<a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
										<a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
										<a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
										<a class="dropdown-item" href="javascript:void(0)">Another One</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fal fa-user fa-2x"></i>
										<p class="d-lg-none d-md-block">
											Account
										</p>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#" onclick="ejecutar('perfil/profile.php','contenido')">
											Mi Perfil
										</a>
										<a class="dropdown-item" href="javascript:void(0)">Cambiar mi contraseña</a>
										<div class="divider"></div>
										<a class="dropdown-item" href="#" onclick="cerrar()">Cerrar Sesión</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				

				<div class="content" id="contenido"></div>



				<footer class="footer">
					<div class="container-fluid">
						<nav class="float-left">
							<ul>
								<li>
									<a href="https://www.creative-tim.com">
										Creative Tim
									</a>
								</li>
								<li>
									<a href="https://creative-tim.com/presentation">
										About Us
									</a>
								</li>
								<li>
									<a href="http://blog.creative-tim.com">
										Blog
									</a>
								</li>
								<li>
									<a href="https://www.creative-tim.com/license">
										Licenses
									</a>
								</li>
							</ul>
						</nav>

						<div class="copyright float-right" id="date">, made with <i class="material-icons">favorite</i> by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.</div>
					</div>
				</footer>

				<div class="modal fade modal-primary" id="forms-modal" tabindex="-1" role="dialog" aria-labelledby="forms-modalTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								...
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-info">Save changes</button>
							</div>
						</div>
					</div>
				</div>

				<div id="system-msg"></div>

				<div class="fixed-plugin">
					<div class="dropdown show-dropdown">
						<a href="#" data-toggle="dropdown">
							<i class="fa fa-cog fa-2x"> </i>
						</a>
						<ul class="dropdown-menu">
							<li class="header-title"> Sidebar Filters</li>
							<li class="adjustments-line">
								<a href="javascript:void(0)" class="switch-trigger active-color">
									<div class="badge-colors ml-auto mr-auto">
										<span class="badge filter badge-purple active" data-color="purple"></span>
										<span class="badge filter badge-azure" data-color="azure"></span>
										<span class="badge filter badge-green" data-color="green"></span>
										<span class="badge filter badge-warning" data-color="orange"></span>
										<span class="badge filter badge-danger" data-color="danger"></span>
									</div>
									<div class="clearfix"></div>
								</a>
							</li>

							<li class="header-title">Images</li>
							<li>
								<a class="img-holder switch-trigger" href="javascript:void(0)">
									<img src="img/back-menu/bar.jpg">
								</a>
							</li>
							<li class="active">
								<a class="img-holder switch-trigger" href="javascript:void(0)">
									<img src="img/back-menu/bar.jpg">
								</a>
							</li>
							<li>
								<a class="img-holder switch-trigger" href="javascript:void(0)">
									<img src="img/back-menu/bar.jpg">
								</a>
							</li>
							<li>
								<a class="img-holder switch-trigger" href="javascript:void(0)">
									<img src="img/back-menu/bar.jpg">
								</a>
							</li>
							<li class="button-container">
								<a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
							</li>
							<li class="header-title">Want more components?</li>
							<li class="button-container">
								<a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
									Get the pro version
								</a>
							</li>
							<li class="button-container">
								<a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
									View Documentation
								</a>
							</li>
							<li class="button-container github-star">
								<a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
							</li>
							<li class="header-title">Thank you for 95 shares!</li>
							<li class="button-container text-center">
								<button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
								<button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
								<br>
								<br>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<script>
			jQuery(document).ready(function($) {
				$('#contenido').load('home.php');
			});

			function activar(elm){
				for (var i = 1; i <= 10; i++) {
					$('#item-'+i).removeClass('active');
				}
				$('#'+elm).addClass('active');
			}

			function cerrar(){
				Swal.fire({
					title: 'Deseas cerrar tu sesión?',
					type: 'question',
					text: 'Los cambios que hiciste quedaron guardados',
					showCancelButton: true,
					confirmButtonColor: '#F47E00',
					cancelButtonColor: '#d33',
					cancelButtonText: 'No',
					confirmButtonText: 'Sí, terminar'
				}).then((result) => {
					if (result.value) {
						window.location='session_close.php';
					}
				})
			}

			$("#fr-buscar").submit(function(e) {
				e.preventDefault();
				var form = $(this);
				var url = form.attr('action');
				$.ajax({
					type: "POST",
					url: url,
					data: form.serialize(),
					beforeSend: function(){
						$('#div_carga').show();
						$('#q').attr("disabled", true);
						$('#btn-buscar').attr("disabled", true);
					},
					success: function(data){
						$('#contenido-usr').html(data);
					},
					complete: function(){
						$('#div_carga').hide();
						$('#btn-buscar').attr("disabled", false);
						$('#q').attr("disabled", false);
					}
				});
			});

			function ejecutar(url, div){
				$('#'+div).load(url);
			}
		</script>
	</body>
</html>