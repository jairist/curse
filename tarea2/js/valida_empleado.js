function validacion(){
    //Validar nombre 
    //la última condicion obliga que el valor no este formado por espacios en blanco
    var nombre =  document.getElementById("nombre").value;
    if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
        alert("[ERROR] El empleado debe tener un nombre.");
        document.getElementById("nombre").focus();
        return false;
    }
    
    //Validar apellido  
    var apellido =  document.getElementById("apellido").value;
    if(apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){
        alert("[ERROR] El empleado debe tener un apellido.");
        document.getElementById("apellido").focus();
        return false;
        
    }
    //Validar selección de la lista
    var indice = document.getElementById("posicion").selectedIndex;
    if(indice == 0 || indice == null){
        alert("[ERROR] Debe seleccionar un elemento de la lista.");
        document.getElementById("posicion").focus();
        return false;
    }
     //Validar selección de la lista
    var indice = document.getElementById("departamento").selectedIndex;
    if(indice == 0 || indice == null){
        alert("[ERROR] Debe seleccionar un elemento de la lista.");
        document.getElementById("departamento").focus();
        return false;
    }
    //Validar salario
    var sueldo = document.getElementById("salario").value;
    if(isNaN(sueldo) || sueldo == null ){
        alert("[ERROR] Salario no válido.");
        document.getElementById("salario").focus();
        return false;
        
    }
    
     //Validar correo elemctronico(EL QUE VALE LOS PUNTOS)
    var email = document.getElementById("email").value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if ( !expr.test(email) ){
        alert("Error: La dirección de correo " + email + " es incorrecta.");
        document.getElementById("email").focus();
        return false;
    }
    
    
    
}