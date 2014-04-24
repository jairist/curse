<?php

/**
 * @author JairisThomas
 * @copyright 2014
 * 
 * Archivo de conexion a mysql
 */
 //Variables de coneccion
 $host  = 'localhost';
 $user  = 'root';
 $pwd   = ''; //en esta db no tengo password
 
 
 // Conectando, seleccionando la base de datos
 $link = mysql_connect($host, $user, $pwd)
    or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db('tarea2') or die('No se pudo seleccionar la base de datos');
?>