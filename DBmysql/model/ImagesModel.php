<<?php
include '/opt/lampp/htdocs/hospital/DBmysql/connectodb/ConnectDataBase.php';

class ImagesModel
{

    private $db = NULL;
    public function __construct()
    {
        //objeto de conexion
        $dbConnection = new DbConnection();
        //obtengo la conexion
        $this->db = $dbConnection->connect();
    }
    public function insert($fullname, $email, $pass)
    {
        //validacion conexion
        if ($this->db->connect_errno) {
            echo "Fallo la conexion a Base de datos";
            exit();
        } else {
            //registros de datos
            $sql = "INSERT INTO imagen (name, email, pass) VALUES ('{$fullname}','{$email}','{$pass}')";
            if ($this->db->query($sql) === true) {
                header("Location: /hospital/views/registro_ok.php");
                exit;
            } else {
                //formato del codigo si se presenta un error
                echo "Error a ejecutar la tarea: ";
                echo "<pre>";
                print_r($this->db);
                echo "</pre>";
            }
            //cierra la conexion a la DB.
            $this->db->close();
        }
    }
    public function getTasks()
    {
        if ($this->db->connect_errno) {
            echo "Fallo la conexion a Base de datos";
            exit();
        } else {

            $sql = "SELECT * FROM imagen";
            $imagen = $this->db->query($sql);
            $this->db->close();
            return $imagen;
        }
    }

    public function getTask($id)
    {
        $sql = "SELECT * FROM imagen WHERE id={$id}";
        $imagen = $this->db->query($sql)->fetch_assoc();
        return $imagen;
    }

    public function updateTask($id, $name, $email, $pass)
    {
        $sql = "UPDATE imagen SET name='{$name}', email='{$email}', pass='{$pass}' WHERE id='{$id}'";
        $this->db->query($sql);
        $this->db->close();
    }
    
}