<?php

/**
 * @author JairisThomas
 * @copyright 2014
 */
  
 include("includes/header.php");
 include("includes/dbconn.php");
 $id_pelicula = $_GET['id_pelicula'];
 
 $sql   = "CALL dar_pelicula_sp($id_pelicula)";
 $rs    = mysql_query($sql, $peliculasLink);
 $row   = mysql_fetch_array($rs);
 
 $titulo        = $row['titulo'];
 $genero        = $row['genero'];
 $duracion      = $row['duracion'];
 $puntuacion    = $row['puntuacion'];
 $disponible = ($row['disponible'] = 1 )? "Si" : "No";
 $clasificacion = $row['clasificacion'];
?>
 <h2>Eliminando Pel�cula </h2>
 <table class="grid" cellpadding="2" cellspacing="2">
 
    <tr style="background-color: black; color: white">
        <th>Cod</th>
        <th>T�tulo</th>
        <th>G�nero</th>
        <th>Duraci�n</th>
        <th>Puntuaci�n</th>
        <th>Disponible</th>
        <th>Clasificaci�n</th>
    </tr>
<?php
echo "<tr>";
        echo "<td class=\"id_pelicula\">$id_pelicula</td>";
        echo "<td class=\"titulo\">$titulo</td>";
        echo "<td class=\"genero\">$genero</td>";
        echo "<td class=\"duracion\">$duracion</td>";
        echo "<td class=\"puntuacion\">$puntuacion</td>";
        echo "<td class=\"disponible\">$disponible</td>";
        echo "<td class=\"clasificacion\">$clasificacion</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
        echo "<h4> Seguro que desea eliminar esta pel�cula </h4>";   
        echo "<form style=\"display: inline;\" action=\"eliminar_pelicula.php\" method=\"POST\">";
        echo "<input type=\"submit\" value=\"Elminar\"/>";
        echo "<input type=\"button\" value=\"Cancelar\" onclick=\"atras()\" />";
        echo "<input type=\"hidden\" name=\"id_pelicula\" value=\"$id_pelicula\"/>";
        echo "</form>";
 include("includes/dbdisc.php");
  include("includes/footer.php");
?>