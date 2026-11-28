<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioProductos.php';
require_once __DIR__ . '/../src/utilidades/vistas.php';

$repositorio = new RepositorioProductos(__DIR__ . '/../datos/datos.json');
$productos = $repositorio->obtenerTodos();
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Tienda Tec - Agregar Producto</title>
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Productos</h1>
            <nav aria-label="Principal">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php" aria-current="page">catalogo</a></li>
                    <li><a href="contacto.php">Contacto</a></li>    
                </ul>
            </nav>
        </header>

        <main>
            <h2>Catálogo</h2>
            <a href="agregar-producto.php" class="boton-agregar">Agregar Producto +</a>
            <section class="tarjetas-productos">
                <?php foreach ($productos as $producto): ?>
                    <?php mostrarTarjetaProducto($producto); ?>
                <?php endforeach; ?>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 Mi Tienda Tec. Todos los derechos reservados.</p>
        </footer>
    </body>
</html> 