<html>
<head>
    <title>Elimina Departamento</title>
    <script type="text/javascript">
        function atras() {
            window.location="listdepartamentos.php";
        }
    </script>
</head>

<h3>Elimina Departamento</h3>

<?php
    include("includes/dbconn.php");
    
    $dept_no = $_GET['dept_no'];
    
    $rs = mysql_query("SELECT dept_nombre FROM departamentos WHERE dept_no = '$dept_no'", $empleadosLink);
    $row = mysql_fetch_array($rs);
    $dept_nombre = $row['dept_nombre'];
       
    $sql = "SELECT 1 FROM dept_empleados WHERE dept_no = '$dept_no' ";
    $sql.= "LIMIT 1";
    $rs = mysql_query($sql, $empleadosLink);
    $num_rows = mysql_num_rows($rs);
    $existe = ($num_rows > 0) ? true : false;
?>

<body>
    <form action="deletedepto.php" method="post">
        <table>
            <tr>
                <td>Codigo</td>
                <td style="color: blue; font: bold"><?=$dept_no?></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td style="color: blue; font: bold"><?=$dept_nombre?></td>
            </tr>
            
            <?php            
            if (!$existe) {
                echo "<tr>";
                echo "    <td></td>";
                echo "    <td><input type=\"submit\" value=\"Eliminar\"/><input type=\"button\" value=\"Cancelar\" onclick=\"atras()\" /></td>";
                echo "</tr>";
                $mensaje = "";
            } else {
                echo "<tr>";
                echo "    <td></td>";
                echo "    <td><input type=\"button\" value=\"Atras\" onclick=\"atras()\" /></td>";
                echo "</tr>"; 
                $mensaje = "<p style=\"color: red;\">* No es posible eliminar este registro.</p>";               
            }
            ?>            
        </table>
        <input type="hidden" name="dept_no" value="<?=$dept_no?>" />
    </form>
    <?=$mensaje?>
</body>
</html>