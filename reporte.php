<?php
require('./fpdf186/fpdf.php');
require './conexionB.php';
ob_start();
$conn = new Conexion();
$con = $conn->Conectar();

$sqlSelect = "SELECT rol,user,pass FROM login;";

$respuesta = $con->query($sqlSelect);
if (!$respuesta) {
    die("Error en la consulta".$con->error);
}

$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial', 'B', 10);

$fpdf->Cell(150, 10, "login", 1);
$fpdf->Ln();
$fpdf->Cell(50, 10, "Rol", 1);
$fpdf->Cell(50, 10, "Username", 1);
$fpdf->Cell(50, 10, "Password", 1);
$fpdf->Ln();

$fpdf->SetFont('Arial', '', 10);  
while ($row = $respuesta->fetch_array()) {
    $roll = $row['rol'];
    $user = $row['user'];
    $pass = $row['pass'];
    

    $fpdf->Cell(50, 10, $roll, 1);
    $fpdf->Cell(50, 10, $user, 1);
    $fpdf->Cell(50, 10, $pass, 1);
    
    $fpdf->Ln();
};
ob_clean();
$fpdf->Output();
exit();
?>