<?php
include_once('ConexionB.php');
$conn = (new Conexion())->conectar();
#*if ($_SERVER['METHOD_REQUEST']==='POST'&& isset($_POST['agregar'])) {

#$nombre =$_POST['nombre'];
  
#$apellido = $_POST['apellido'];
 #   $edad = $_POST['edad'];
  #  $sql = "INSERT INTO repaso ";
#}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Crud.php" method="POST" class="d-flex">
            <input type="text" name="nombre" placeholder="Escriba su nombre" class="form-control me-2" required>
            <button type="submit" class="btn btn-primary">agregar</button>

            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
            <button type="submit" >editar</button>

            <input type="text" name="edad" id="edad" placeholder="Ingrese su edad">
            <button type="submit" >borrar</button>            
</form>
<form action="Crud.php" method="POST" >
<select name="opciones" id="comboBox">
  <option value="opcion1">Opción 1</option>
  <option value="opcion2">Opción 2</option>
  <option value="opcion3">Opción 3</option>
</select>
<select name="" id="" disabled="disabled"></select>
</form>
<form>
<table border="3">
  <thead>
    <tr>
      <th>Columna 1</th>
      <th>Columna 2</th>
      <th>Columna 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dato 1</td>
      <td>Dato 2</td>
      <td>Dato 3</td>
    </tr>
    <tr>
      <td>Dato 4</td>
      <td>Dato 5</td>
      <td>Dato 6</td>
    </tr>
  </tbody>
</table>
</form>
<form action="Crud.php" method="POST">
   <table border=1>
    <thead>
        <tr>
            <th>hola</th>
            <th>hola1</th>
            <th>hola2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
    </tbody>
   </table>
</form>

</body>
</html>