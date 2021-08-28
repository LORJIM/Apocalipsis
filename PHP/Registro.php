<?php
	$Nombre=filter_input(INPUT_POST, "Nombre");
	$Apellidos=filter_input(INPUT_POST, "Apellidos");
	$Usuario=filter_input(INPUT_POST, "Usuario");
	$Contraseña=filter_input(INPUT_POST, "Contraseña");
	$Email=filter_input(INPUT_POST, "Email");
	$Autorizacion=filter_input(INPUT_POST, "Autorización");
	$Logeos=0;

	require "Conexión.php";

	if($conexion->connect_errno){
	exit("Conexion fallida. Razon: ".$conexion->connect_error);
	}
	else{
		$conexion->query("SET NAMES 'utf8'");
		$insertar="INSERT INTO Acceso( Nombre, Apellidos, Usuario, Contraseña, Email, Autorización) VALUES ('$Nombre', '$Apellidos', '$Usuario', '$Contraseña', '$Email', '$Autorizacion')";
		
		if($conexion->query($insertar)){

			$encriptar="UPDATE Acceso SET Contraseña= md5(Contraseña)";
			$conexion->query($encriptar);
			require "/var/www/html/Log/CaptarIP.php";
        	$ip=get_client_ip();
        	require "/var/www/html/Log/LogResgistro.php";
        	Registro($Nombre,$Apellidos,$Usuario,$Contraseña,$Email,$ip);
        	echo'<script type="text/javascript">
       	 	alert("Se ha registrado correctamente");
        	window.location.href="../HTML/log.html";
        	</script>';
			
		}
		else{
			echo "NO se ha ejecutado";
		}
	}	
?>