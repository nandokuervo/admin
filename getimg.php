<?php require 'conex.php';
$nom=$_GET['usr'];
$cmd="SELECT ceid FROM administrador WHERE nick='$nom';";
$getimg=$iswcnn->query($cmd);
if (($getimg->num_rows)>0) {
	$setimg=$getimg->fetch_array();
	echo "<img src='img/users/$setimg[0].jpg' class='img-fluid'>";
}
else{
	echo "<img src='img/logo-img.png' class='img-fluid'>";
} ?>