<?php require '../check.php';
$usr=$_SESSION['idu'];
$cmd="SELECT U.apellidos, U.nombres, U.ceid, R.funcion, U.movil, U.email, U.bday, U.nick, U.estado FROM administrador AS U INNER JOIN rol AS R ON U.funcion=R.rolId WHERE U.adminId=$usr;";
$getinf=$iswcnn->query($cmd);
$setinf=$getinf->fetch_array(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header card-header-warning">
					<h4 class="card-title">Mi perfil</h4>
					<p class="card-category">Mis datos de usuario</p>
				</div>

				<div class="card-body">
					<form action="perfil/profile_upd.php" method="POST" id="fr-me-upd">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Cargo</label>
									<?php echo "<input type='text' class='form-control' value='$setinf[3]' disabled>"; ?>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Apellidos</label>
									<?php echo "<input type='text' class='form-control' name='apes' value='$setinf[0]'>"; ?>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Nombres</label>
									<?php echo "<input type='text' class='form-control' name='nomb' value='$setinf[1]'>"; ?>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Carnet de Identidad</label>
									<?php echo "<input type='text' class='form-control' name='cide' value='$setinf[2]'>"; ?>
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Teléfono Móvil</label>
									<?php echo "<input type='text' class='form-control' name='movi' value='$setinf[4]'>"; ?>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Correo electrónico</label>
									<?php echo "<input type='email' class='form-control' name='mail' value='$setinf[5]'>"; ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Fecha nacimiento</label>
									<?php echo "<input type='date' class='form-control' name='cump' value='$setinf[6]'>"; ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">Nickname</label>
									<?php echo "<input type='text' class='form-control' name='nusr' value='$setinf[7]' disabled>"; ?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Acerca de mi</label>
									<div class="form-group">
										<textarea class="form-control" rows="3" name="hist"></textarea>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-danger pull-right">
							<i class="fal fa-save"></i> &nbsp; Guardar Cambios
						</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-5">
			<div class="card card-profile">
				<form method="POST" id="foto-upd" enctype="multipart/form-data">
					<div class="card-avatar" id="foto-perfil">
						<a href="#">
							<?php echo "<img class='img' src='img/users/$setinf[2].jpg'>"; ?>
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category">CEO / Co-Founder</h6>
						<h4 class="card-title">Alec Thompson</h4>
						<p class="card-description">Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...</p>
						<button type="submit" class="btn btn-danger btn-round">
							Cambiar fotografía
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$("#fr-me-upd").submit(function(e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr("action");
		$.ajax({
			type: "POST",
			url: url,
			data: form.serialize(),
			beforeSend: function(){
				$("#div_carga").show();
				$("#btn-insert").attr("disabled", true);
			},
			success: function(data){
				$("#system-msg").html(data);
			},
			complete: function(){
				$("#div_carga").hide();
			}
		});
	});

	$(function(){
		$("#foto-upd").on("submit", function(e){
			e.preventDefault();
			var f = $(this);
			var formData = new FormData(document.getElementById("foto-upd"));
			formData.append("dato", "valor");
			$.ajax({
				url: "digi/avc_up_file.php",
				type: "post",
				dataType: "html",
				data: formData,
				cache: false,
				contentType: false,
				processData: false
			})
			.done(function(res){
				$('#foto-perfil').html(res);
			});
		});
	});
</script>