<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventario Componentes PC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Inventario Componentes de Computadora</h2>

<a href="agregar.php" class="btn btn-primary mb-3">Agregar Producto</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Categoría</th>
    <th>Marca</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM productos");
while($row = $resultado->fetch_assoc()){
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['categoria'] ?></td>
    <td><?= $row['marca'] ?></td>
    <td>$<?= $row['precio'] ?></td>
    <td><?= $row['stock'] ?></td>
    <td>
        <a href="ver.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Ver</a>
        <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>