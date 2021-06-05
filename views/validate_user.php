<?php
include '/opt/lampp/htdocs/hospital/static/header.php';
$taskModel = new TaskModel();
$tasks = $taskModel->getTasks();
while ($row = mysqli_fetch_assoc($tasks)) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //recibo datos del frame sigin
    $user = $row['email'];
    $password = $row['pass'];


    if (($email == $user) && ($pass == $password)) {
        // validador
        $rol = 'admin';
        //1. iniciar servicio de sesion
        session_start();
        //2. crear la sesion
        $_SESSION['rol'] =  $rol;
        header("Location: /hospital/index.php");
        exit;
    } else {
        alert("Error inicio de sesion")
    }
}