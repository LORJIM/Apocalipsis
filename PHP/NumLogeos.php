<?php

require "Conectarse.php";


$result = $conexion->query("SELECT * FROM Acceso WHERE Usuario ='".$Usuario."' AND Contraseña='".$Contraseña."'");
if (!$result) {
    echo 'No se pudo ejecutar: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);

$Logeo=$row[6];
$Logeo++;


$Logeos = "UPDATE Acceso SET Logeos=$Logeo WHERE Usuario ='".$Usuario."' AND Contraseña='".$Contraseña."'";
$resultados = $conexion->query($Logeos);


?>