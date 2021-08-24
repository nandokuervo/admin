<?php session_start();
require 'conex.php';
$usr=$_POST['nick'];
$psw=$_POST['pass'];
$cmd="SELECT * FROM administrador WHERE nick='$usr' AND pswd=AES_ENCRYPT('i-ServiceAdmin','$psw');";
$getchk=$iswcnn->query($cmd);
if (($getchk->num_rows)==1) {
	$setadm=$getchk->fetch_array();
	$_SESSION['idu']=$setadm[0]; ?>
	<script>
		if (navigator.userAgent.indexOf('Firefox')>0){
			window.location='main.php#';
		}
		else{
			window.location='main.php?#';
		}
	</script> <?php
}
else{ ?>
	<script>
		Swal.fire({
			position: 'center',
			type: 'error',
			title: 'No puedo identificarte, por favor inicia sesión para usar este administrador',
			showConfirmButton: false,
			timer: 1500
		}).then((result) => {
			location.reload();
		});
	</script>
<?php } ?>