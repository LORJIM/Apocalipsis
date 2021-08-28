<?php

  require "Conexión.php";

  $conexion->query("SET NAMES 'utf8'");
  $seleccionar="SELECT Día, Mes, Año, Desde_las, Hasta_las, Campaña, Descripción FROM Festivos WHERE ID='$ID'";
  $resultado=$conexion->query($seleccionar);
 
  if ($fila=$resultado-> fetch_assoc())
  {      

     require "/var/www/html/Log/RegistroEditar2.php";
     $Día2=$fila["Día"];
     $Mes2=$fila["Mes"];
     $Año2=$fila["Año"];
     $Desde_las2=$fila["Desde_las"];
     $Hasta_las2=$fila["Hasta_las"];
     $Campaña2=$fila["Campaña"];
     $Descripcion2=$fila["Descripción"];
     Registro($Día2,$Mes2,$Año2,$Desde_las2,$Hasta_las2,$Campaña2,$Descripcion2);
    
  }
  else 
  {
    echo "Sin resultados";
  }
  $conexion -> close();
  ?>