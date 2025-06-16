<?php
session_start();
include('conexionB.php');
$conn = new Conexion();
$con = $conn->conectar();
$user = isset($_POST['user']) ? $_POST['user'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

$sql="SELECT user,rol FROM login WHERE user = ? AND pass = ?";
$st=mysqli_prepare($con,$sql);
if (!$st) {
    die($con->error) ;
}
$st->bind_param("ss",$user,$pass);
$st->execute();
$rs=$st->get_result();

if ($rs->num_rows >0) {
    $row = $rs->fetch_assoc();
    $_SESSION['user']=$user;
    $_SESSION['rol']=$row['rol'];

    if ($row['rol']== 'admin') {
        header( "Location:admin.php");   
        
    }elseif ($row['rol']=='estudiante') {
        header('estudiante.php');
    }else{
        $_SESSION['error'];
        header('login.php');
    }
}else{
    $_SESSION['error']="Usuario o contrasenia incorrectos, itnente nuevamente";
    header('login.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="user" id="user" placeholder="Ingrese su usuario">
        <br></br>
        <input type="text" name="pass" id="pass" placeholder="Ingree su contrasenia">
        <br></br>
        <button type="submit" id="submit">Ingresar</button>
        <button type="submit" href="../reporte.php" id="reporte" >reporte</button>
        <a href="./reporte.php" class="easyui-linkbutton" iconCls="icon-ok" plain="true" target="_blank">Reporte</a>
        
    </form>
    
</body>
</html>