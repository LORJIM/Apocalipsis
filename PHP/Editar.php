<?php
$ID=filter_input(INPUT_POST, "ID");
$Desde_las=filter_input(INPUT_POST,"Desde_las");
$Hasta_las=filter_input(INPUT_POST,"Hasta_las");
$Campaña=filter_input(INPUT_POST,"Campaña");
$Descripcion=filter_input(INPUT_POST,"Descripción");
$Año=filter_input(INPUT_POST, "Año");
$Mes=filter_input(INPUT_POST, "Mes");
$Día=filter_input(INPUT_POST, "Día");



require "SelecEditar.php";

require "Conexión.php";


if($conexion->connect_errno){
	exit("Conexion fallida. Razon: ".$conexion->connect_error);
}
else{

	$insertar="UPDATE Festivos SET Día=$Día, Mes=$Mes, Año=$Año, Desde_las='$Desde_las', Hasta_las='$Hasta_las', Campaña='$Campaña', Descripción='$Descripcion' WHERE ID='$ID'";
	if($conexion->query($insertar)){
		echo "Se ha editado correctamente";
		require "/var/www/html/Log/CaptarIP.php";
        $ip=get_client_ip();
		require "/var/www/html/Log/RegistroEditar.php";
		Registro2($Día,$Mes,$Año,$Desde_las,$Hasta_las,$Campaña,$Descripcion,$ip);

	}
}
$conexion->close();
?>