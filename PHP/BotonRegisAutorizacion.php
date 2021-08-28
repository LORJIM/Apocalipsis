<?php
	$Usuario=filter_input(INPUT_POST,"Usuario");
	$Autorizacion="Si";

	require "Conectarse.php";

	$Boton = "SELECT * FROM Acceso WHERE Usuario = '".$Usuario."' AND Autorización = '".$Autorizacion."'";
	$resultados = $conexion -> query($Boton);

	if ($resultados -> num_rows > 0) {

		
		echo "<input type='hidden' id='variable' value='Si'>";
	}
	else{
		
		echo "<input type='hidden'  id='variable' value='No'>";
	}
?>
<script src="../SCRIPTS/toogle.js"></script>