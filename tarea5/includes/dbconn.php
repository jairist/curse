<?php

    /* Definicion de variables para conexion BD */
    $host = "localhost";
    $schema = "tarea5";
    $user = "root";
    $pass = "";
    
    $peliculasLink = mysql_connect($host, $user, $pass) or die("No fue posible conectarse a la BD.");
    mysql_select_db($schema, $peliculasLink) or die ("Esquema ".$schema." no existe.");

?>