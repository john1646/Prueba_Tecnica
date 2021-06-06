<?php
include '/opt/lampp/htdocs/hospital/DBmysql/model/ImagesModel.php';

       //recepcion de formulario form_images.php
        $nom=$_POST["nameimage"];
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="/hospital/Images/uploadimages/".$foto;
        copy($ruta,$destino);

        //validations php

if (!empty($nom) || !empty($destino)) {
    echo"validate create task";
    $imagesModel = new ImagesModel();
    $ImagesModel->insert($nom,$destino);
    //se envia informacion ImagesModel.php
}
?>