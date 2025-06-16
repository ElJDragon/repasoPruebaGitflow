<?php
class Conexion{
    public function conectar(){
        $host="localhost";
        $user="root";
        $pass="";
        $db="repaso";
        $conn=mysqli_connect($host,$user,$pass,$db);
        if (!$conn) {
            echo("No se ha conectado a la base d edatos");
        }
        echo("Se conecto a la base de datos");  
        return $conn;
    }
    
}
?>
