<?php
	$Usuario=filter_input(INPUT_POST,"Usuario");
	$Contraseña=filter_input(INPUT_POST,"Contraseña");
	$encriptado= md5($Contraseña);

	require "Conectarse.php";

	$login = "SELECT * FROM Acceso WHERE Usuario ='".$Usuario."' AND Contraseña='".$encriptado."'";
	$resultados = $conexion->query($login);
	

	if ($resultados-> num_rows > 0) {


		require "InsertarLogeos.php";
		require "NumLogeos.php";
        require "../Log/CaptarIP.php";
        $ip=get_client_ip();
		require "../Log/RegistroInicSesion.php";
		$variable=1;
		Registro($variable,$Usuario,$ip);
		echo"<script type='text/javascript'>
        window.location.href='../HTML/formulario_completo.html'+'#'+'$Usuario';
        </script>";


	}
	else
	{

		echo'<script type="text/javascript">
        alert("Usuario o Contraseña erroneos");
        </script>';
        require "../Log/CaptarIP.php";
        $ip=get_client_ip();
		require "../Log/RegistroInicSesion.php";
		$variable=0;
		Registro($variable,$Usuario,$ip);
	}
		



?>