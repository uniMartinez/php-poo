<?php
//llamado de los distintos archivos que se van a usar
require 'poligono.php';
require 'triangulo.php';
require 'cuadrado.php';
require 'rectangulo.php';
require 'hexagono.php';

//instanciacion de objetos
$triangulo = new triangulo(3,6,9,10);
print $triangulo->lados();
print 'Perimetro del '. get_class($triangulo) . ': '. $triangulo->perimetro();
print 'Area del '. get_class($triangulo) . ': '. $triangulo->area();

$cuadrado = new cuadrado(7);
print $cuadrado->lados();
print 'Perimetro del '. get_class($cuadrado) . ': '. $cuadrado->perimetro();
print 'Area del '. get_class($cuadrado) . ': '. $cuadrado->area();

$hexagono = new hexagono(8,9);
print $hexagono->lados();
print 'Perimetro del '. get_class($hexagono) . ': '. $hexagono->perimetro();
print 'Area del '. get_class($hexagono) . ': '. $hexagono->area();


