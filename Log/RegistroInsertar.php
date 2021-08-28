<?php
	function Registro($Fecha,$Desde_las,$Hasta_las,$Campaña,$Descripcion,$ip){
        $accion=" Se ha introducido a la base de datos: ";
        $hora=date("G:i:s");
        $date=date("d-m-Y");
        $FileName=$date.".log";
        
        if($archivo = fopen("../LOGS/$FileName", "a"))
        {
            if(fwrite($archivo, date("d-m-Y").$accion."[".$Fecha.", ".$Desde_las.", ".$Hasta_las.", ".$Campaña.", ".$Descripcion."] a las ".$hora." Desde la direccion ".$ip. "\n"))
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