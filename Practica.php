<?php
class Conexon(){
    public function Conectar(){
        $servername="localhost";
        $user="root";
        $password="";
        $db="repaso";
        $conn=mysqli_connect($servername,$user,$password,$db);
        if ($conn) {
            return $conn;
        }else{
            echo("No se ha podido conectar");
        }

    }
}
?>