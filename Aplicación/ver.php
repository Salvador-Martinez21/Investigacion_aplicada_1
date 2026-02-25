<?php
include("conexion.php");
$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM productos WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
<h2>Detalle del Producto</h2>

<ul class="list-group">
<li class="list-group-item"><b>Nombre:</b> <?= $row['nombre'] ?></li>
<li class="list-group-item"><b>Categoría:</b> <?= $row['categoria'] ?></li>
<li class="list-group-item"><b>Marca:</b> <?= $row['marca'] ?></li>
<li class="list-group-item"><b>Precio:</b> $<?= $row['precio'] ?></li>
<li class="list-group-item"><b>Stock:</b> <?= $row['stock'] ?></li>
</ul>

<a href="index.php" class="btn btn-primary mt-3">Volver</a>
</div>