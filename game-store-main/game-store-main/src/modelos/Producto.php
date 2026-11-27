<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/modelos/Categoria.php';
require_once __DIR__ . '/../src/modelos/Producto.php';

$perifericos = new Categoria('perifericos');
$audio = new Categoria('audio');

echo $perifericos->obtenerNombre().'<br>';
echo $audio->obtenerNombre().'<br>--------------------------------------------<br>';

#$intento = new Producto(1, 'mouse', new Categoria('perifericos'), 499.00, 'texto', 10, 'img.jpg');
#echo $intento->obtenerId().'<br>';
#echo $intento->obtenerNombre().'<br>';

$mouse = Producto::desdeArreglo([
    'id' => 1,
    'nombre' => 'mouse inalambrico',
    'categoria' => 'perifericos',
    'precio' => 499.00,
    'descripcion' => 'mouse inalambrico con alta precision',
    'stock' => 25,
    'imagen' => 'https://placehold.co/200x150?text=mouse'
]);

echo $mouse->obtenerNombre().'('.$mouse->obtenerCategoria()->obtenerNombre().') y cuesta '.$mouse->obtenerPrecioFormateado().'<br>';
echo $mouse->estaDisponible() ? 'existe producto' : 'agotado';