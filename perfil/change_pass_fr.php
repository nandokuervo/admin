<?php require '../conex.php';
$usr=$_GET['u']; ?>
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle"><?php echo "USUARIO: $setinf[1] $setinf[0] <small> $setinf[3]</small>"; ?></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
		<?php echo "<div class='input-group' style='padding-bottom: 7px;'>
				<input type='text' class='form-control' name='1ape' id='1ape' required='required' value='$setinf[0]' placeholder='APELLIDOS'>
				<input type='text' class='form-control' name='nomb' id='nomb' required='required' value='$setinf[1]' placeholder='NOMBRES'>
				<input type='text' class='form-control' name='ceid' id='ceid' required='required' value='$setinf[2]' placeholder='CARNET DE IDENTIDAD'>
			</div>
			<div class='input-group'>
				<input type='text' class='form-control' name='celu' id='celu' required='required' value='$setinf[4]' placeholder='TELEFONO MOVIL'>
				<input type='text' class='form-control' name='mail' id='mail' required='required' value='$setinf[5]' placeholder='E MAIL'>
				<input type='date' class='form-control' name='bday' id='bday' required='required' value='$setinf[6]'>
			</div>"; ?>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal">
				<i class="fal fa-times-circle"></i> &nbsp; Cerrar
			</button>
			<button type="button" class="btn btn-success">
				<i class="fal fa-save"></i> &nbsp; Guardar cambios
			</button>
		</div>
	</div>
</div>