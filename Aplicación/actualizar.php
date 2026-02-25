<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$conexion->query("UPDATE productos SET
nombre='$nombre',
categoria='$categoria',
marca='$marca',
precio='$precio',
stock='$stock'
WHERE id=$id");

header("Location: index.php");
?>