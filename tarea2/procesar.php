<?php
/**
 * @author JairisThomas
 * @copyright 2014
 * Super Reto adicional (2 puntos extra):
 * 
 * Utilice un archivo PHP para procesar el formulario, esto es, en el atributo action debe 
 * colocar procesar.php el cual debe obtener vía el método GET (arreglo GET) los valores 
 * colocados en el formulario y mostrarlos en una tabla HTML
 */
 
 $nombre = $_GET['nombre'];
 $apellido = $_GET['apellido'];
 $posicion = $_GET['posicion'];
 $departamento = $_GET['departamento'];
 $salario = $_GET['salario'];
 $estado = $_GET['estado'];
 $email = $_GET['email'];
 
 switch($posicion){
    case 1:
        $posicion = "Contador";
        break;
    case 2:
        $posicion = "Administrador";
        break;
    case 3:
        $posicion = "DBA";
        break;    
 }
  switch($departamento){
    case 1:
        $departamento = "Contabilidad";
        break;
    case 2:
        $departamento = "Informática";
        break;
    case 3:
        $departamento = "Ventas";
        break;    
    case 4:
        $departamento = "Mercadeo";
        break;
 }
 if($estado == "on"){
    $estado = "Activo";
 }else
    $estado = "Inactivo";
 
 include 'header.php';
?>
    <center><h2>Registrando Empleado</h2></center><br />
    <p>Confirmar los datos Ingrasados</p>
    <br />
    <br />
    
        <div id="tablaConfirmacion">
            
            <table>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Posición</th>
                <th>Departamento</th>
                <th>Salario</th>
                <th>Estado</th>
                <th>Correo  Electronico</th>
                <tr>
                    <td><?php echo $nombre?></td>
                    <td><?php echo $apellido?></td>
                    <td><?php echo $posicion?></td>
                    <td><?php echo $departamento?></td>
                    <td><?php echo $salario?></td>
                    <td><?php echo $estado?></td>
                    <td><?php echo $email?></td>            
                </tr>            
            </table>
        </div>
        <br />
        <br />
      
        </div>
                
        <div id="links">
            <p>Opciones Disponibles</p><br />
            <a href="empleado.htm">X Cancelar </a><br />
           
            <?php 
                echo "<a href='procesar2.php?nombre=$nombre&apellido=$apellido".
                "&posicion=$posicion&departamento=$departamento&salario=$salario".
                "&estado=$estado&email=$email'>-> Continuar </a><br />";
            ?>
            
            
            
            
        </div>
    <div id="footer"> <p>&copy; 2014 Jairis Rosario, MAT:100076006, Derechos Reservados.</p></div>
    </div>
</body>
</html>