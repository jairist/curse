<?php
    include("includes/dbconn.php");
    
    $sql = "SELECT dept_no, dept_nombre FROM departamentos";
    
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $sql .= " WHERE dept_nombre LIKE '$nombre%'";
    }
    
    $sql .= " ORDER BY dept_nombre";
    
    $resultSet = mysql_query($sql, $empleadosLink);
    
?>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    
    <h2>Mantenimiento Departamentos</h2>
    
    <table>
        <tr>
            <td>
                <form style="display: inline;" action="listdepartamentos.php" method="get">
                    <input type="text" size="20" name="nombre" />
                    <input type="submit" value="Filtrar"/>
                </form>
                
                <form style="display: inline;" action="agregardepto.php" method="get">
                    <input type="submit" value="Agregar"/>
                </form>
            </td>
        </tr>
    </table>
    
    <table class="grid" cellpadding="2" cellspacing="2">
    <tr style="background-color: #CD3333; color: white">
        <th>Codigo</th>
        <th>Nombre</th>
        <th colspan="2">Accion</th>
    </tr>
<?php
    while ($row = mysql_fetch_array($resultSet)) {
        $dept_no = $row['dept_no'];
        $dept_nombre = $row['dept_nombre'];
        
        echo "<tr>";
        echo "<td class=\"dept_no\">$dept_no</td>";
        echo "<td class=\"dept_nombre\">$dept_nombre</td>";
        echo "<td><a href=\"editadepto.php?dept_no=$dept_no\"><img title=\"Editar $dept_nombre\" src=\"images/update-icon.png\" alt=\"Editar\"/></a></td>";
        echo "<td><a href=\"eliminadepto.php?dept_no=$dept_no\"><img title=\"Eliminar $dept_nombre\" src=\"images/delete-icon.png\" alt=\"Eliminar\"/></a></td>";
        echo "</tr>";
    }
?>
    </table>
    
<?php    
    
    include("includes/dbdisc.php");
?>