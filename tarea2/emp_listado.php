<?php

/**
 * @author JairisThomas
 * @copyright 2014
 * 
 * Reto adicional(1 punto extra):
 * Crear un archivo llamado emp_listado.php que se conecte
 * a la base de datos y liste el contenido de la tabla creada
 * en formato de tabla html con formato CSS.
 */
 
 include 'header.php';
?>
    <div id="emp_listado">
        <?php 
        include 'conexion.php';
        // Realizar una consulta MySQL
        $query = "SELECT * from empleados";
        $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

        // Imprimir los resultados en HTML
        echo "<table id='tabla_empl_listado'>";
        echo "  <th>Cod </th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Posición</th>
                <th>Departamento</th>
                <th>Salario</th>
                <th>Estado</th>
                <th>Correo  Electronico</th>";
                
            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
                echo "<tr>";
                foreach ($line as $col_value) {
                    echo "<td>".$col_value."</td>";
                    }
                echo "</tr>";
            }
        echo "</table>";
        
        mysql_free_result($result);

        // Cerrar la conexión
        mysql_close($link);

        ?>
    </div>
<?php include 'footer.php';
