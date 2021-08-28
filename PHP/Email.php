<?php

require "Conectarse.php";

$Fecha=date("Y-m-d", strtotime('yesterday'));



$result = ("SELECT Usuario, COUNT(Usuario) AS Logeo 
FROM Logeos WHERE Fecha='".$Fecha."' GROUP BY Usuario HAVING COUNT(Usuario)=(SELECT MAX(Logeo) FROM (SELECT Usuario, COUNT(Usuario) Logeo FROM Logeos WHERE Fecha='".$Fecha."'GROUP BY Usuario) AS pepito)");

$array=$conexion->query($result);

if ($conexion->query($result)) {
     
     $array2 = mysqli_fetch_row($array);
	 $Email=$array2[0];


	$Enviar ="SELECT Email FROM Acceso WHERE Usuario ='".$Email."'";
	$cadena =$conexion->query($Enviar);
	if ($conexion->query($result)) {
		$Correo =mysqli_fetch_row($cadena);

		$Correo2=$Correo[0];
		require "MensajeCorreo.php";
		Registro($Correo2);
	}

}
else{
	
	echo 'No se pudo ejecutar: ';
}

?>
