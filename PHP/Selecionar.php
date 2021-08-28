<?php
  
  require "Conexión.php";

  $conexion->query("SET NAMES 'utf8'");
  $seleccionar="SELECT ID, Día, Mes, Año, Desde_las, Hasta_las, Campaña, Descripción FROM Festivos";
  $resultado=$conexion->query($seleccionar);
  if ($resultado-> num_rows > 0)
  { 
    
      $ID="ID";
      $Día="Día";
      $Mes="Mes";
      $Año="Año";
      $Desde_las="Desde_las";
      $Hasta_las="Hasta_las";
      $Campaña="Campaña";
      $Descripción="Descripción";
      $select="Seleccionar";
      echo "<table border='1' id='table'>
          <tbody>
              <tr>
                <th style='display:none'>".$ID."</th>
                <th>".$Día."</th>
                <th>".$Mes."</th>
                <th>".$Año."</th>
                <th>".$Desde_las."</th>
                <th>".$Hasta_las."</th>
                <th>".$Campaña."</th>
                <th>".$Descripción."</th>
                <th>".$select."</th>

            </tr>";
      while ($fila=$resultado-> fetch_assoc())
    {      
      echo"<tr><td style='display:none'>".$fila["ID"] ."</td><td>".$fila["Día"] ."</td><td>".$fila["Mes"] ."</td><td>".$fila["Año"] ."</td><td>". $fila["Desde_las"] ."</td><td>". $fila["Hasta_las"] ."</td><td>". $fila["Campaña"] ."</td><td>".$fila["Descripción"]."</td><td align='center'>"."<input type='radio' name='select' id='select' />"."</td></tr>";;

    }
    echo "</table>";
    }
  else {
    echo "Sin resultados";
    }
  $conexion-> close();
  ?>