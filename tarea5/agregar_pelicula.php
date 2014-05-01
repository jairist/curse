<?php

/**
 * @author JairisThomas
 * @copyright 2014
 */
    include("includes/dbconn.php");
    
    $titulo         = $_POST['titulo'];
    $genero         = $_POST['genero'];
    $duracion       = $_POST['duracion'];
    $puntuacion     = $_POST['puntuacion'];
    $disponible     = $_POST['disponibilidad'];    
    $clasificacion  = $_POST['clasificacion'];
    
    
    $sql = "SELECT 1 FROM peliculas WHERE titulo = '$titulo'";
    $rs = mysql_query($sql, $peliculasLink);
    $num_rows = mysql_num_rows($rs);
    
    if ($num_rows == 0) {
        
        $insert = "call agregar_pelicula_sp('$titulo', '$genero', $duracion,$puntuacion,$disponible,'$clasificacion')";
        
        mysql_query($insert, $empleadosLink);
        include("includes/dbdisc.php");
        header("Location: lista_peliculas.php");
    } else {
        include("includes/dbdisc.php");
        header("Location: agrega_pelicula.php?titulo=$titulo");    
    }


?>