<?php
//1. iniciar servicio de session
session_start();
if ($_SESSION['rol'] != 'admin') {
  header("Location: /hospital/views/login.php");
  exit;
}
?>
<?php include_once ("/opt/lampp/htdocs/hospital/static/header.php") ?>
<!--listado de usuarios registrados con el edit de usuario-->
<body>
    <div class="container">
        <table class="table table-striped mt-4 mb-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contrasena</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '/opt/lampp/htdocs/hospital/DBmysql/model/TaskModel.php';
                $taskModel = new TaskModel();
                $tasks = $taskModel->getTasks();
                while($row = mysqli_fetch_assoc($tasks)){
                    $template = "<tr>
                    <th scope='row'>{$row['id']}</th>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['pass']}</td>
                    <td>
                    <a href='/cesde/labels/edit_task.php?id={$row['id']}'>Edit</a>
                    </td>
                </tr>";
                echo $template;
                }

                ?>
                
            </tbody>
        </table>
    </div>
</body>

<?php include_once ("/opt/lampp/htdocs/hospital/static/footer.php") ?>