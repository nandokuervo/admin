<?php $iswcnn=new mysqli("localhost","root","m3dr4n0F","iservice");
if ($iswcnn->connect_errno) {
	echo"La conexión con el servidor de bases de datos se ha estido...<br>".$iswcnn->connect_errno."<br>".$iswcnn->connect_error;
}
else{
	//echo "se conecto";
} ?>