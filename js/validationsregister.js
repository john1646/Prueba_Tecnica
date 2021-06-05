
function validateContactForm() {
    let email = document.getElementById("email").value;
    let name = document.getElementById("name").value;
    let pass = document.getElementById("pass").value;
    if (email == "" || name == "" || pass=="") {
        alert("debe llenar todos los campos");
        return false;
    } else if (name.length < 5) {
        alert("El nombre debe contener mas de 5 caracteres ");
        return false;
    }
    else if (pass.length < 8) {
        alert("la contrasena debe tener minimo 8 caracteres");
        return false;
    }
    return true;
}
