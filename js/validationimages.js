//validacion carga de archivos
function validateimages(){
    let namei = document.getElementById("nameimage").value;
    let image1 = document.getElementById("image").value;

    if(namei != "" && image1 != ""){
        alert("debe llenar todos los campos");
        return false;
    } 
    
    return true;
    
}