<?php
    include("includes/header.php");
    include_once("includes/PHPPaging.lib.php");
    include("includes/dbconn.php");
    $paging = new PHPPaging;
    
    
    $sql = "SELECT id_pelicula,titulo,genero,duracion,puntuacion,disponible,clisificacion FROM peliculas";
    //$sql .= "limint 0,$NUMERO_REG";
   
    
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $sql .= " WHERE titulo LIKE '$nombre%'";
    }
    
    $sql .= " ORDER BY titulo";
    
    $paging->agregarConsulta($sql);
    $paging->ejecutar();
    
    //$resultSet = mysql_query($sql, $empleadosLink);
    //$numero_registros = mysql_num_rows($resultSet);
    
    
    
    
?>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    
    <h2>Listado Películas </h2>
    
    <table>
        <tr>
            <td>
                <form style="display: inline;" action="#" method="get">
                    <input type="text" size="20" name="nombre" />
                    <input type="submit" value="Filtrar"/>
                </form>
            </td>
        </tr>
    </table>
    
    <table class="grid" cellpadding="2" cellspacing="2">
    <tr style="background-color: black; color: white">
        <th>Cod</th>
        <th>Título</th>
        <th>Género</th>
        <th>Duración</th>
        <th>Puntuación</th>
        <th>Disponible</th>
        <th>Clisificación</th>
        <th colspan="3">Acción</th>
    </tr>
<?php
//mysql_fetch_array($resultSet)
    while ($row = $paging->fetchResultado()) {
        $id_pelicula = $row['id_pelicula'];
        $titulo = $row['titulo'];
        $genero = $row['genero'];
        $duracion = $row['duracion'];
        $puntuacion = $row['puntuacion'];
        $disponible = ($row['disponible'] = 1 )? "Si" : "No";
        $clasificacion = $row['clisificacion'];
        
        echo "<tr>";
        echo "<td class=\"id_pelicula\">$id_pelicula</td>";
        echo "<td class=\"titulo\">$titulo</td>";
        echo "<td class=\"genero\">$genero</td>";
        echo "<td class=\"duracion\">$duracion</td>";
        echo "<td class=\"puntuacion\">$puntuacion</td>";
        echo "<td class=\"disponible\">$disponible</td>";
        echo "<td class=\"clasificacion\">$clasificacion</td>";
        echo "<td><a href=\"agrega_pelicula.php\"><img title=\"Agregar Pelicula\" src=\"images/add-icon.png\" alt=\"Agregar\"/></a></td>";
        echo "<td><a href=\"modifica_pelicula.php?id_pelicula=$id_pelicula\"><img title=\"Editar $titulo\" src=\"images/update-icon.png\" alt=\"Editar\"/></a></td>";
        echo "<td><a href=\"elimina_pelicula.php?id_pelicula=$id_pelicula\"><img title=\"Eliminar $titulo\" src=\"images/delete-icon.png\" alt=\"Eliminar\"/></a></td>";
        echo "</tr>";
        
    }
    echo "</table>";
    echo "Páginas ".$paging->fetchNavegacion();
    include("includes/dbdisc.php");
    include("includes/footer.php");
?>