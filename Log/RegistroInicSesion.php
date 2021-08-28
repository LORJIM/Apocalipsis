<?php
        
    function Registro($variable,$Usuario,$ip){

        $accion=" ha iniciado sesion a las ";
        $hora=date("G:i:s");
        $date=date("d-m-Y");
        $FileName=$date.".log";

        if ($variable == 1) {
        
            if($archivo = fopen("../LOGS/$FileName", "a"))
            {
                if(fwrite($archivo, date("d-m-Y")." El Usuario ".$Usuario.$accion.$hora." Desde la direccion ".$ip. "\n"))
                {
                    echo "Se ha ejecutado correctamente";
                }
                else
                {
                    echo "No se pudo ejecutar";
                }
 
                fclose($archivo);
            }
        }
        else{
            if ($archivo = fopen("/home/becario2/Escritorio/Cursos/Proyecto/logs2.txt", "a")) {
                if(fwrite($archivo, date("d-m-Y")." Intento de conexión fallido a las ".$hora." Desde la direccion ".$ip. "\n"))
                {
                   
                }
                else
                {
                    echo "No se pudo ejecutar";
                }
 
                fclose($archivo);
            }
        }
    }
?>