<?php
 $ID= filter_input(INPUT_POST,"ID");
 $Año=filter_input(INPUT_POST, "Año");
 $Mes=filter_input(INPUT_POST, "Mes");
 $Día=filter_input(INPUT_POST, "Día");
 $Desde_las=filter_input(INPUT_POST,"Desde_las");
 $Hasta_las=filter_input(INPUT_POST,"Hasta_las");
 $Campaña=filter_input(INPUT_POST,"Campaña");
 $Descripcion=filter_input(INPUT_POST,"Descripción");

 
require "Conexión.php";

if($conexion->connect_errno){
	exit("Conexion fallida. Razon: ".$conexion->connect_error);
}
else{
	$conexion->query("SET NAMES 'utf8'");
	$insertar="DELETE FROM Festivos WHERE ID='$ID'";

	if($conexion->query($insertar)){
		echo "Se ha eliminado correctamente";
		require "/var/www/html/Log/CaptarIP.php";
        $ip=get_client_ip();
		require "/var/www/html/Log/RegistroElim.php";
		Registro($Día,$Mes,$Año,$Desde_las,$Hasta_las,$Campaña,$Descripcion,$ip);
	}
}
?>