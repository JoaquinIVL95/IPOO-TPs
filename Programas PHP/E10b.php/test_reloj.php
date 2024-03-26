<?php 

include 'reloj.php';
$hora = 23;
$minutos= 59;
$segundos = 58;

$objReloj = new Reloj($segundos, $minutos, $hora);

for($i = 0 ; $i <=86400; $i++){
    $iterar = $i + 1;
    echo $objReloj . "\n";
    $objReloj->incrementar();
    echo "1er Incremento" . $objReloj . "\n";
    // sleep(1);
}

// echo $objReloj . "\n";
// $objReloj->incrementar();
// echo "1er Incremento" . $objReloj . "\n";
// $objReloj->incrementar();
// echo "2er Incremento" . $objReloj . "\n";
// $objReloj->incrementar();
// echo "3er Incremento" . $objReloj . "\n";

$objReloj->puesta_a_cero();
echo $objReloj. "\n\n";
