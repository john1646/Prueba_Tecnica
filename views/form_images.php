<?php include_once("/opt/lampp/htdocs/hospital/static/header.php") ?>
<!--formulario para carga de imagenes a la base de datos, con metodo post y validacion en js -->
<div class="container mt-4">
    <h1 class="mx-5 mb-3">Cargar Imagenes</h1>
    <form  method="POST" action="createimages2.php" enctype="multipart/form-data">
        <div class="mb-3 col-4 mx-5">
            <label for="exampleInputEmail1" class="form-label">Nombre de la imagen</label>
            <input type="text" class="form-control col-10" id="nameimage1" name="nameimage" aria-describedby="emailHelp" require>
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3 col-4 mx-5">
            <label for="exampleInputEmail1" class="form-label">Seleccione una imagen</label>
            <input type="file" class="form-control" id="imagen1" name="foto" aria-describedby="emailHelp" require>
            <div id="emailHelp" class="form-text "></div>
        </div>
        <button type="submit"   class="btn btn-primary mx-5">Enviar</button>
    </form>
</div>
<?php include_once("/opt/lampp/htdocs/hospital/static/footer.php") ?>