<!DOCTYPE html>
<html>
<head>
<title>Agregar Producto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Agregar Componente</h2>

<form action="guardar.php" method="POST">

<input type="text" name="nombre" class="form-control mb-2"
pattern="^[A-Za-z0-9\s]{3,50}$"
title="Solo letras y números, mínimo 3 caracteres"
placeholder="Nombre del componente" required>

<input type="text" name="categoria" class="form-control mb-2"
pattern="^[A-Za-z\s]{3,30}$"
title="Solo letras"
placeholder="Categoría (RAM, SSD, GPU...)" required>

<input type="text" name="marca" class="form-control mb-2"
pattern="^[A-Za-z\s]{2,30}$"
title="Solo letras"
placeholder="Marca" required>

<input type="text" name="precio" class="form-control mb-2"
pattern="^\d+(\.\d{1,2})?$"
title="Formato válido: 150 o 150.99"
placeholder="Precio" required>

<input type="number" name="stock" class="form-control mb-2"
min="0" placeholder="Stock" required>

<button class="btn btn-success">Guardar</button>
<a href="index.php" class="btn btn-secondary">Volver</a>

</form>
</body>
</html>