<?php include_once("/opt/lampp/htdocs/hospital/static/header.php") ?>

<!--Envio de datos del formulario a create_task.php en carpeta views-->
<!--Validacion js y php antes de ingreso a DB-->
<body>
    <div class="container">
    <div class="1">
    <h1 class="mx-5 mt-4">Registrate Con Nosotros</h1>
    </div>
    <form onsubmit="return validateContactForm()" method="POST" action="create_task.php">
  
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" id="name" name="fullname">
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Direccion de Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="email" class="form-text">Tu correo no sera compartido.</div>
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Contrasena</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
 
  <button type="submit" class="btn btn-primary mb-4 mx-5">Registrar</button>
</form>
    </div>
</body>
<?php include_once("/opt/lampp/htdocs/hospital/static/footer.php") ?>