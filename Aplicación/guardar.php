<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$conexion->query("INSERT INTO productos 
(nombre, categoria, marca, precio, stock) 
VALUES ('$nombre','$categoria','$marca','$precio','$stock')");

header("Location: index.php");
?>