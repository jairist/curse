<html>
<head>
    <title>Modifica Departamento</title>
    <script type="text/javascript">
        function atras() {
            window.location="lista_peliculas.php";
        }
    </script>
</head>

<?php
    include("includes/dbconn.php");
    $id_pelicula = $_GET['id_pelicula'];
       
    if (isset($_GET['titulo'])) {
        $titulo = $_GET['titulo'];
    } else {
        $sql    = "SELECT titulo, duracion, puntuacion FROM peliculas WHERE id_pelicula = '$id_pelicula'";
        $rs     = mysql_query($sql, $empleadosLink);
        $row    = mysql_fetch_array($rs);
        $titulo = $row['titulo'];
        $duracion = $row['duracion'];
        $puntuacion = $row['puntuacion'];
    }
?>

<h3>Modifica Pelicula</h3>

<body>
<form action="modificar_pelicula.php" method="post">
    <input type="hidden" name="id_pelicula" <?php echo "value=\"$id_pelicula\""; ?> />
        <table>
            <tr>
                <td>T�tulo</td>
                <td><input type="text" size="30" name="titulo" <?php echo "value=\"$titulo\""; ?> /></td>
            </tr>
            <tr>
                <td>G�nero</td>
                <td>
                    <select name="genero">
                        <option id="00" value="0">Selecione G�nero..</option>
                        <option id="01" value="Accion">Accion</option>
                        <option id="02" value="Drama">Drama</option>
                        <option id="03" value="Ciencia F�ccion">Ciencia F�ccion</option>
                        <option id="04" value="Horror">Horror</option>
                        <option id="05" value="Intriga">Intriga</option>
                        <option id="06" value="Misterio">Misterio</option>
                        <option id="07" value="Comedia">Comedia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Duraci�n</td>
                <td><input type="text" size="30" name="duracion" <?php echo "value=\"$duracion\""; ?>/></td>
            </tr>
            <tr>
                <td>puntuacion</td>
                <td><input type="text" size="30" name="puntuacion" <?php echo "value=\"$puntuacion\""; ?>/></td>
            </tr>
            <tr>
                <td>Disponible</td>
                <td>
                    <input type="checkbox" name="disponibilidad" value="1" checked="true"/>Si
                    <input type="checkbox" name="disponibilidad" value="0"/>No
                </td>
            </tr>
            <tr>
                <td>Clasificaci�n</td>
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
</body>
</html>