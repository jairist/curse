<?php

/**
 * @author JairisThomas
 * @copyright 2014
 */

//Recivir variables
 $nombre = $_GET['nombre'];
 $apellido = $_GET['apellido'];
 $posicion = $_GET['posicion'];
 $departamento = $_GET['departamento'];
 $salario = $_GET['salario'];
  $estado = $_GET['estado'];
 $email = $_GET['email'];
 
 if($estado == "Activo"){
    $estado = 1;
 }else
    $estado = 0;
 
 
 include 'header.php';

    echo "<div id='lista_prcesar2'>";
    
        include 'conexion.php';
        //insertamos las variables dentro de la base de datos empleados
        
        $insert="INSERT INTO empleados (
                					emp_nombre,
                					emp_apellido,
                					emp_posicion,
                					emp_departamento,
                					emp_salario,
                					emp_estado,
                					emp_email
                                    )
                                    VALUES(
                                    '$nombre',
                                    '$apellido',
                                    '$posicion',
                                    '$departamento',
                                    '$salario',
                                    '$estado',
                                    '$email')";
                                    
        if (!mysql_query($insert,$link)){
            die('Error: ' . mysql_error($link));
            }
        echo "<p><h3>Empleado registrado exitosamente<h3></p>";
        
        mysql_close($link);                      
        echo "</div>";
?>
  </div>
                
        <div id="links">
            <p>Opciones Disponibles</p><br />
            <center><a href="emp_listado.php"> Verificar Ingreso </a></center><br />
            <center><a href="empleado.htm"> Regresar a Formulario </a></center><br />
            
        </div>
    <div id="footer"> <p>&copy; 2014 Jairis Rosario, MAT:100076006, Derechos Reservados.</p></div>
    </div>
</body>
</html>