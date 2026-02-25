<?php
include("conexion.php");
$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM productos WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h4>Editar Componente</h4>
        </div>
        <div class="card-body">

            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" 
                           value="<?= $row['nombre'] ?>" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <input type="text" name="categoria" 
                           value="<?= $row['categoria'] ?>" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text" name="marca" 
                           value="<?= $row['marca'] ?>" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="text" name="precio" 
                           value="<?= $row['precio'] ?>" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" 
                           value="<?= $row['stock'] ?>" 
                           class="form-control" required>
                </div>

                <button class="btn btn-warning">Actualizar</button>
                <a href="index.php" class="btn btn-secondary">Volver</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>