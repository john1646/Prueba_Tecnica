<?php
include '/opt/lampp/htdocs/hospital/DBmysql/model/TaskModel.php';
//asignacion de varibales desde el formulario registro

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

//validations php

if (!empty($email) || !empty($fullname) || !empty($pass)) {
    echo"validate create task";
    $taskModel = new TaskModel();
    $taskModel->insert($fullname, $email, $pass);
    
}