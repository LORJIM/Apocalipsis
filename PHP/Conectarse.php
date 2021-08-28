<?php
	
	$contrasena="becarios6";
	$usuario="root";
	$servidor="localhost";
	$nombredatabase="CursoPHP";
	$conexion=new mysqli($servidor,$usuario,$contrasena,$nombredatabase);
	if($conexion->connect_errno){
		exit("Conexion fallida. Razon: ".$conexion->connect_error);
	}
	$conexion->query("SET NAMES 'utf8'");
?>