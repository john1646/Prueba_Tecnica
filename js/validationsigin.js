//validacion inicio de sesion 
function validateSiginUser(){
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;

    if (email == "" || pass == ""){
        alert("debe llenar todos los campos");
        return false;
    } 
    else if(pass.length < 8){ 
        alert("la contrasena debe tener minimo 8 caracteres");
        return false;
    }
    //return true;
}
