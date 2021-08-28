<?php
	
	$Fecha= date("Y-m-d");
	$Hora=date("G:i:s");
	
	require "Conectarse.php";

	
	$insertar2="INSERT INTO Logeos (Usuario, Fecha, Hora) VALUES ('$Usuario', '$Fecha', '$Hora')";
	$conexion->query($insertar2)
?>