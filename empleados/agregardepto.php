<html>
<head>
    <title>Agrega Departamento</title>
    <script type="text/javascript">
        function atras() {
            window.location="listdepartamentos.php";
        }
    </script>
</head>

<?php
    if (isset($_GET['dept_nombre'])) {
        $dept_nombre = $_GET['dept_nombre'];
    } else {
        $dept_nombre = "";
    }
?>

<h3>Agrega Departamento</h3>

<body>
    <form action="insertdepto.php" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" size="30" name="dept_nombre" value="<?=$dept_nombre?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Agregar"/><input type="button" value="Cancelar" onclick="atras()" /></td>
            </tr>            
        </table>
    </form>
    
    <?php
        if (isset($_GET['dept_nombre'])) {
            echo "<p style=\"color: red\">* Ya existe un departamento con ese nombre.</p>";
        }
    ?>
    
</body>
</html>