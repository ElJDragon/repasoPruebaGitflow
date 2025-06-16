<?php
include('conexionB.php');
$conn= (new Conexion)->conectar();
$sql="SELECT * FROM login";
if ($rs=$conn->query($sql)) {
    echo("consulta hehco");
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
    <table border="1">
        <th>
            <tr>
                <td>Rol</td>
                <td>user</td>
                <td>password</td>
            </tr>
            <th>
                <?php while($row=$rs->fetch_assoc()) : ?>
                <tr>
                    <td> <?php echo $row['rol']?></td>
                    <td> <?php echo $row['user']?></td>
                    <td> <?php echo $row['pass']?></td>
                </tr>
                <?php endwhile?>
                <button onclick="window.location.href='agregar.php'">agregar</button>
                <button onclick="window.location.href='borrar.php'">borrar</button>
            </th>
        </th>
    </table>
</body>
</html>