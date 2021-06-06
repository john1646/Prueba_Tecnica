<?php
include ("/opt/lampp/htdocs/hospital/DBmysql/connectodb/ConnectDataBase.php");
        //objeto de conexion
        $dbConnection = new DbConnection();
        //obtengo la conexion
        $this->db = $dbConnection->connect();
    
if(isset($_POST['guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nameimage'];

    if(isset($imagen) && $imagen != ""){
        $tipo= $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];
    
        $query = "INSERT INTO imagen(imagen,nombre) VALUES('$imagen','$nombre')";
        $resultado = mysqli_query($db,$query);
        if($resultado){
            move_uploaded_file($temp,'hospital/Images/uploadimages/'.$imagen);
            $_SESSION['mensaje'] = 'Imagen subida Correctamente';            
        }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        }
    }

}
?>