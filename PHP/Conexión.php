<?php
	$contrasena="becarios6";
	$usuario="root";
	$servidor="localhost";
	$nombredatabase="CursoPHP";
	$conexion=new mysqli($servidor,$usuario,$contrasena,$nombredatabase);
	$conexion->query("SET NAMES 'utf8'");
?>