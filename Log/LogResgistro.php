<?php
    function Registro($Nombre,$Apellidos,$Usuario,$Contraseña,$Email,$ip){
        $accion=" Se han registrado en la base de datos con los siguientes datos: ";
        $hora=date("G:i:s");
        $date=date("d-m-Y");
        $FileName=$date.".log";
        
        if($archivo = fopen("../LOGS/$FileName", "a"))
        {
            if(fwrite($archivo, date("d-m-Y").$accion."[".$Nombre.", ".$Apellidos.", ".$Usuario.", ".$Contraseña.", ".$Email."] a las ".$hora." Desde la direccion ".$ip. "\n"))
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