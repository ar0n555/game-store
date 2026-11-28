<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioProductos.php';

$repositorio = new RepositorioProductos(__DIR__ . '/../datos/datos.json');

echo '<pre>';
foreach ($repositorio->obtenerTodos() as $producto) {
    echo $producto->obtenerId() . ' | '
        . $producto->obtenerNombre() . ' | '
        . $producto->obtenerPrecioFormateado() . "\n";
}
echo '</pre>';



ini_set('display_errors', '1');
error_reporting(E_ALL);