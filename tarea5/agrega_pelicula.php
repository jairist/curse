<html>
<head>
    <title>Agrega Película</title>
    <script type="text/javascript">
        function atras() {
            window.location="lista_peliculas.php";
        }
    </script>
</head>

<?php
     include("includes/dbconn.php");
    if (isset($_GET['titulo'])) {
        $titulo = $_GET['titulo'];
    } else {
        $titulo = "";
    }
?>

<h3>Agrega Película</h3>

<body>
    <form action="agregar_pelicula.php" method="post">
        <table>
            <tr>
                <td>Título</td>
                <td><input type="text" size="30" name="titulo" value="<?=$titulo ?>" </td>
            </tr>
            <tr>
                <td>Género</td>
                <td>
                    <select   name="genero">
                        <option id="00" value="0">Selecione Género..</option>
                        <option id="01" value="Accion">Accion</option>
                        <option id="02" value="Drama">Drama</option>
                        <option id="03" value="Ciencia Fíccion">Ciencia Fíccion</option>
                        <option id="04" value="Horror">Horror</option>
                        <option id="05" value="Intriga">Intriga</option>
                        <option id="06" value="Misterio">Misterio</option>
                        <option id="07" value="Comedia">Comedia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Duración</td>
                <td><input type="text" size="30" name="duracion" value=""/></td>
            </tr>
            <tr>
                <td>puntuacion</td>
                <td><input type="text" size="30" name="puntuacion" value=""/></td>
            </tr>
            <tr>
                <td>Disponible</td>
                <td>
                    <input type="checkbox" name="disponibilidad" value="1" checked="true"/>Si
                    <input type="checkbox" name="disponibilidad" value="0"/>No
                </td>
            </tr>
            <tr>
                <td>Clasificación</td>
                <td>
                    <input type="radio" name="clasificacion" value="G"/>G
                    <input type="radio" name="clasificacion" value="PG"/>PG
                    <input type="radio" name="clasificacion" value="PG-13"/>PG-13
                    <input type="radio" name="clasificacion" value="R"/>R
                    <input type="radio" name="clasificacion" value="NC-17"/>NC-17
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Agregar"/><input type="button" value="Cancelar" onclick="atras()" /></td>
            </tr>            
        </table>
    </form>
    
    <?php
        if (isset($_GET['titulo'])) {
            echo "<p style=\"color: red\">* Ya existe una película con este título.</p>";
        }
        
         include("includes/dbdisc.php");
    ?>
    
</body>
</html>