<?php
include('conexionB.php');
$con=(new Conexion)->conectar();
if($_POST){
    $user = $_POST['user'];

$sql="DELETE FROM login WHERE user = ?";
$st=$con->prepare($sql);
if ($st) {
    $st->bind_param("s",$user);
    if ($st->execute()) {
        echo(" s borro d ela tabla");
        header("Location: login.php");
        }else{
            echo("Error al eliminar");
        }
    
    
}
$st->close();
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
    <form action="borrar.php" method="post">
    <input type="text" name="user" id="user" required>
    <button type="submit">borrar</button>
    </form>
   
</body>
</html>
