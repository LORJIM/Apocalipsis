<?php
    function Registro2($Día,$Mes,$Año,$Desde_las,$Hasta_las,$Campaña,$Descripcion,$ip){
        $hora=date("G:i:s");
        $date=date("d-m-Y");
        $FileName=$date.".log";

        
        if($archivo = fopen("../LOGS/$FileName", "a"))
        {
            if(fwrite($archivo," a: [".$Día."/".$Mes."/".$Año.", ".$Desde_las.", ".$Hasta_las.", ".$Campaña.", ".$Descripcion."] a las ".$hora." Desde la direccion ".$ip. "\n"))
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