<?php
	require "Conectarse.php";

	$Callcenter = "SELECT * FROM CallCenter";
	$resultado=$conexion->query($Callcenter);
	if ($resultado-> num_rows > 0) {

		
		echo "<select id='contact_apellidos' name='apellidos' class='form-control'>
				<option value=''> Seleciona un Call Center</option>";

		while ($opcion=$resultado-> fetch_assoc()){
			 echo "<option>".$opcion["CallCenter"]."</option>";
	              
	          
		}
		echo "</select><span class='error'>Campo requerido</span>";
	}
	else{
		echo "Sin resultados";
	}
?>