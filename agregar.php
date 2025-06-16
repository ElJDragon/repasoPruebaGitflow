<?php
include('conexionB.php');
$con = (new Conexion())->conectar();
if ($_POST) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $rol=$_POST['rol']
    $sql="INSERT INTO login (user,pass)VALUES()";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="agregar.php" method="post">
        <select name="rol" id="rol">
            <option value="admin">Adminirtrador</option>
            <option value="est">estudiante</option>
        </select>
        <input type="text" name="user" id="user" placeholder="usuario" required>
        <input type="text" name="pass" id="pass" placeholder="contrasnia" required>
        <button type="submit">agregar</button>
    </form>
</body>
</html>