<?php
	function Registro($Día2,$Mes2,$Año2,$Desde_las2,$Hasta_las2,$Campaña2,$Descripcion2){
		$accion=" Se han modificado de la base de datos: ";
        $hora=date("G:i:s");
        $date=date("d-m-Y");
        $FileName=$date.".log";

        if($archivo = fopen("../LOGS/$FileName", "a"))
        {
        	if (fwrite($archivo, date("d-m-Y").$accion."[".$Día2."/".$Mes2."/".$Año2.", ".$Desde_las2.", ".$Hasta_las2.", ".$Campaña2.", ".$Descripcion2."]")) 
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