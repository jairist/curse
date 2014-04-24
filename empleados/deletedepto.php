<?php
    include("includes/dbconn.php");
    
    $codigo = $_POST['dept_no'];  
    
    $update = "DELETE FROM departamentos WHERE dept_no = '$codigo'";
        
    mysql_query($update, $empleadosLink);
    
    include("includes/dbdisc.php");
        
    header("Location: listdepartamentos.php");    

?>