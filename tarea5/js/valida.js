function atras() {
            window.location="lista_peliculas.php";
        }
function validacion(){
    //Validar nombre 
    //la última condicion obliga que el valor no este formado por espacios en blanco
    var titulo =  document.getElementById("titulo").value;
    if(titulo == null || titulo.length == 0 || /^\s+$/.test(titulo)){
        alert("[ERROR] La pelicula debe tener un titulo.");
        document.getElementById("titulo").focus();
        return false;
    }
    //Validar selección de la lista
    var indice = document.getElementById("genero").selectedIndex;
    if(indice == 0 || indice == null){
        alert("[ERROR] Debe seleccionar un elemento de la lista.");
        document.getElementById("genero").focus();
        return false;
    }
    
    //Validar apellido  
    var duracion =  document.getElementById("duracion").value;
    if(isNaN(duracion) || duracion == null || duracion.length == 0 ){
        alert("[ERROR] La pelicula debe tener una duracion en minutos.");
        document.getElementById("duracion").focus();
        return false;
    }
    //Validar puntuacion
    var puntuacion =  document.getElementById("puntuacion").value;
    if(isNaN(puntuacion) || puntuacion == null || puntuacion.length == 0){
        alert("[ERROR] La pelicula debe tener una puntuacion.");
        document.getElementById("puntuacion").focus();
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