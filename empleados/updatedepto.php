<?php
    include("includes/dbconn.php");
    
    $codigo = $_POST['dept_no'];
    $nombre = $_POST['dept_nombre'];
    
    
    $sql = "SELECT 1 FROM departamentos WHERE dept_nombre = '$nombre'";
    $rs = mysql_query($sql, $empleadosLink);
    $num_rows = mysql_num_rows($rs);
    
    if ($num_rows == 0) { 
        $update = "UPDATE departamentos SET dept_nombre = '$nombre' ";
        $update.= "WHERE dept_no = '$codigo'";
        
        mysql_query($update, $empleadosLink);
        include("includes/dbdisc.php");
        header("Location: listdepartamentos.php");
    } else {
        include("includes/dbdisc.php");
        header("Location: editadepto.php?dept_nombre=$nombre&dept_no=$codigo");    
    }
?>