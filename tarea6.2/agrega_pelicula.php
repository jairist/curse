<?php
    include("includes/header.php");
    include("includes/dbconn.php");
     
    if (isset($_GET['titulo'])) {
        $titulo = $_GET['titulo'];
    } else {
        $titulo = "";
    }
?>

<h3>Agrega Película</h3>

<body>
    <form action="agregar_pelicula.php" method="post" onsubmit="return validacion();" >
        <table>
            <tr>
                <td>Título</td>
                <td><input id="titulo" type="text" size="30" name="titulo" <?php echo "value=\"$titulo\"";?> </td>
            </tr>
            <tr>
                <td>Género</td>
                <td>
                    <select id="genero"  name="genero">
                        <option id="0" value="0">Selecione Género..</option>
                        <option id="1" value="Accion">Accion</option>
                        <option id="2" value="Drama">Drama</option>
                        <option id="3" value="Ciencia Fíccion">Ciencia Fíccion</option>
                        <option id="4" value="Horror">Horror</option>
                        <option id="5" value="Intriga">Intriga</option>
                        <option id="6" value="Misterio">Misterio</option>
                        <option id="7" value="Comedia">Comedia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Duración</td>
                <td><input id="duracion" type="text" size="30" name="duracion" value=""/></td>
            </tr>
            <tr>
                <td>puntuacion</td>
                <td><input id="puntuacion" type="text" size="30" name="puntuacion" value=""/></td>
            </tr>
            <tr>
                <td>Disponible</td>
                <td>
                    <input id="disponible" type="checkbox" name="disponibilidad" value="1" checked="true"/>Si
                    <input id="disponible" type="checkbox" name="disponibilidad" value="0"/>No
                </td>
            </tr>
            <tr>
                <td>Clasificación</td>
                <td>
                    <input id="clasificacion" type="radio" name="clasificacion" value="G" checked="true"/>G
                    <input id="clasificacion" type="radio" name="clasificacion" value="PG"/>PG
                    <input id="clasificacion" type="radio" name="clasificacion" value="PG-13"/>PG-13
                    <input id="clasificacion" type="radio" name="clasificacion" value="R"/>R
                    <input id="clasificacion" type="radio" name="clasificacion" value="NC-17"/>NC-17
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
         include("includes/footer.php");
    ?>