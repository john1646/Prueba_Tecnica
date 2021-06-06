<?php
//1. iniciar servicio de session
session_start();
if ($_SESSION['rol'] != 'admin') {
  header("Location: /hospital/views/login.php");
  exit;
}
?>

<?php include_once("/opt/lampp/htdocs/hospital/static/header.php") ?>
<!--Carga de templates imeganes de base de datos-->
<!--Uso de cards Boostrap-->
<body>
<?php
include '/opt/lampp/htdocs/hospital/DBmysql/model/ImagesModel.php.php';
                $imagesModel = new ImagesModel();
                $imagen = $imagesModel->getTasks();
                while($row = mysqli_fetch_assoc($imagen)){
                    $template ="
    <div class='row row-cols-1 row-cols-md-2 g-4 mt-4 mb-2'>
        <div class='col'>
            <div class='card'>
                <img src='{$row['destino']}' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['name']}</h5>
                    <p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>";
    echo $template;
                }

                ?>
</body>
<?php include_once("/opt/lampp/htdocs/hospital/static/footer.php") ?>
