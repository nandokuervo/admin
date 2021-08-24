<?php require '../check.php';
$aps=$_POST['apes'];
$nom=$_POST['nomb'];
$cid=$_POST['cide'];
$tel=$_POST['movi'];
$eml=$_POST['mail'];
$bir=$_POST['cump'];
$des=$_POST['hist']; ?>
<script>
	/*Swal.fire({
		position: 'top-end',
		type: 'success',
		title: 'Your work has been saved',
		showConfirmButton: false,
		timer: 1500
	})*/
	md.showNotification('top','right','Datos actualizados','<i class="fal fa-check-circle"></i>')
</script>