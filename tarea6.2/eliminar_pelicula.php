<?php

/**
 * @author JairisThomas
 * @copyright 2014
 */

    include("includes/dbconn.php");
    
    $codigo = $_POST['id_pelicula'];  
    
   // echo $codigo;
    
    $update = "CALL eliminar_pelicula_sp($codigo)";
        
    mysql_query($update, $peliculasLink);
    
    include("includes/dbdisc.php");
        
    header("Location: lista_peliculas.php");    

?>