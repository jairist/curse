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
    $id_pelicula    = $_POST['id_pelicula'];
    
    //echo "modificar_pelicula_sp($id_pelicula,'$titulo','$genero',$duracion,$puntuacion,$disponible,'$clasificacion')";  
        
    $update = "call modificar_pelicula_sp($id_pelicula,'$titulo', '$genero', $duracion,$puntuacion,$disponible,'$clasificacion')";
   
    mysql_query($update, $peliculasLink);
    include("includes/dbdisc.php");
    header("Location: lista_peliculas.php");

?>