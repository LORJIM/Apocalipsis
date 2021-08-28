<?php
    function Registro($Correo2){
        
        $FileName="Email.txt";
        
        if($archivo = fopen("/var/www/html/LOGS/$FileName", "a"))
        {
            if(fwrite($archivo, "Se ha enviado correctamente el email a :".$Correo2))
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