<?php require 'conex.php';
$cmd="SELECT * FROM menu";
$getmen=$iswcnn->query($cmd);
while ($setmen=$getmen->fetch_array()) {
	echo "<li class='nav-item' id='$setmen[3]' onclick="."activar('$setmen[3]')".">
		<a class='nav-link' href='#'>
			$setmen[2]
			<p>$setmen[1]</p>
		</a>
	</li>";
} ?>

<script>
	function activar(elm){
		$('#'+elm).addClass('active');
	}
</script>