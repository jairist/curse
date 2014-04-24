<?php
    include("includes/dbconn.php");
    
    $nombre = $_POST['dept_nombre'];
    
    $sql = "SELECT 1 FROM departamentos WHERE dept_nombre = '$nombre'";
    $rs = mysql_query($sql, $empleadosLink);
    $num_rows = mysql_num_rows($rs);
    
    if ($num_rows == 0) {
        $sql = "SELECT CONCAT('d', LPAD(SUBSTR(MAX(dept_no), 2) + 1, 3, '0')) AS codigo FROM departamentos";
        $rs = mysql_query($sql, $empleadosLink);
        $row = mysql_fetch_array($rs);
        $codigo = $row['codigo'];
        
        $insert = "INSERT INTO departamentos VALUES ('$codigo', '$nombre')";
        
        mysql_query($insert, $empleadosLink);
        include("includes/dbdisc.php");
        header("Location: listdepartamentos.php");
    } else {
        include("includes/dbdisc.php");
        header("Location: agregardepto.php?dept_nombre=$nombre");    
    }
?>