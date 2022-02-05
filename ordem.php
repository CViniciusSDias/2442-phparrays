<?php

$notas = [
    'um',
    'dois',
    'tres'
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas:';
var_dump($notasOrdenadas);