<?php
	function Registro($Día,$Mes,$Año,$Desde_las,$Hasta_las,$Campaña,$Descripcion,$ip){
        $accion=" Se han eliminado de la base de datos los siguientes datos: ";
        $hora=date("G:i:s");
        $date=date("d-m-Y");
        $FileName=$date.".log";

        
        if($archivo = fopen("../LOGS/$FileName", "a"))
        {
            if(fwrite($archivo, date("d-m-Y").$accion."[".$Día."/".$Mes."/".$Año.", ".$Desde_las.", ".$Hasta_las.", ".$Campaña.", ".$Descripcion."] a las ".$hora." Desde la direccion ".$ip. "\n"))
            {
                
            }
            else
            {
                echo "No se pudo ejecutar";
            }
 
            fclose($archivo);
        }
        
    }
?>