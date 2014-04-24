<html>
<head>
    <title>Modifica Departamento</title>
    <script type="text/javascript">
        function atras() {
            window.location="listdepartamentos.php";
        }
    </script>
</head>

<?php
    include("includes/dbconn.php");
    
    $dept_no = $_GET['dept_no'];
       
    if (isset($_GET['dept_nombre'])) {
        $dept_nombre = $_GET['dept_nombre'];
    } else {
        $sql = "SELECT dept_nombre FROM departamentos WHERE dept_no = '$dept_no'";
        $rs = mysql_query($sql, $empleadosLink);
        $row = mysql_fetch_array($rs);
        $dept_nombre = $row['dept_nombre'];
    }
?>

<h3>Modifica Departamento</h3>

<body>
    <form action="updatedepto.php" method="post">
        <table>
            <tr>
                <td>Codigo</td>
                <td style="color: blue; font: bold"><?=$dept_no?></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" size="30" name="dept_nombre" value="<?=$dept_nombre?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Modificar"/><input type="button" value="Cancelar" onclick="atras()" /></td>
            </tr>            
        </table>
        <input type="hidden" name="dept_no" value="<?=$dept_no?>" />
    </form>
    
    <?php
        if (isset($_GET['dept_nombre'])) {
            echo "<p style=\"color: red\">* Ya existe un departamento con ese nombre.</p>";
        }
    ?>
    
</body>
</html>