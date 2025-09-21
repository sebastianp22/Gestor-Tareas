<?php
require __DIR__ . '/vendor/autoload.php';

use Sebastian\GestorTareas\Task;

//  Creamos una Tarea
$tarea1 = new Task("Aprender Laravel");

//  Mostramos su estado inicial
echo $tarea1->getTitle() . " - " . $tarea1->getStatus() . PHP_EOL;

//  Marcamos como completada
$tarea1->complete();
echo $tarea1->getTitle() . " - " . $tarea1->getStatus() . PHP_EOL;