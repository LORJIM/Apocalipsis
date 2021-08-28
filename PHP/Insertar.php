<?php
	$Fecha=filter_input(INPUT_POST,"Fecha");
 	$Desde_las=filter_input(INPUT_POST,"Desde_las");
 	$Hasta_las=filter_input(INPUT_POST,"Hasta_las");
 	$Campaña=filter_input(INPUT_POST,"Campaña");
 	$Descripcion=filter_input(INPUT_POST,"Descripción");

 	$date=strtr($_REQUEST['Fecha'],'/','-');
 	$date1=date('Y-m-d', strtotime($date));
 	$date2=strtotime($date1);
 	$Año=date("Y",$date2);
	$Mes=date("m",$date2);
	$Día=date("d",$date2);

	require "Conexión.php";

	if($conexion->connect_errno){
	exit("Conexion fallida. Razon: ".$conexion->connect_error);
	}
	else{
		$conexion->query("SET NAMES 'utf8'");
		$insertar="INSERT INTO Festivos( Día, Mes, Año, Desde_las, Hasta_las, Campaña, Descripción) VALUES ('$Día', '$Mes', '$Año' ,'$Desde_las', '$Hasta_las', '$Campaña', '$Descripcion')";
		if($conexion->query($insertar)){

		echo "Nueva entrada insertada con éxito";
		require "../Log/CaptarIP.php";
        $ip=get_client_ip();
		require "../Log/RegistroInsertar.php";
		Registro($Fecha,$Desde_las,$Hasta_las,$Campaña,$Descripcion,$ip);
		}
		else{
			echo"No se ha agregado";
		}
	}	
?>