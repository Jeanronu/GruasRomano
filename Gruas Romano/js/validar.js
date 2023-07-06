function validar(){
    var nombre, apellidos, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").nodeValue;
    apellidos = document.getElementById("apellidos").nodeValue;
    correo = document.getElementById("correo").nodeValue;
    usuario = document.getElementById("usuario").nodeValue;
    clave = document.getElementById("clave").nodeValue;
    telefono = document.getElementById("telefono").nodeValue;

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" || apellidos === "" || correo === "" || usuario === "" || clave === "" || telefono === ""){
        alert ("Es necesario llenarlos todos");
        return false;
    }
    else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellidos.length>80){
        alert("Los apellidos son muy largo");
        return false;
    }
    else if(correo.length>100){
        alert("El correo es muy largo");
        return false;
    }
    else if(!XPathExpression.test(correo)){
        alert("El correo no es válido");
        return false;
    }
    else if(usuario.length>20 || clave.length>20){
        alert("El usuario y la clave deben tener menos de 20 carácteres");
        return false;
    }
    else if(telefono.length>15){
        alert("El teléfono es muy largo");
        return false;
    }
    else if(isNaN(telefono)){
        alert("El teléfono ingresado no es un número");
        return false;
    }
}