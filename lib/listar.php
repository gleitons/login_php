<?php
$list = [];
$Car = array('modelo' => 'Fox', 'marca' => 'Volkswagem', 'ano' => 2021, 'preco' => 64000);
array_push($list, $Car);
$Car = array('modelo' => 'Gol', 'marca' => 'Volkswagem', 'ano' => 2019, 'preco' => 40000);
array_push($list, $Car);
$Car = array('modelo' => 'Azera', 'marca' => 'Hunday', 'ano' => 2015, 'preco' => 80000);
array_push($list, $Car);
$Car = array('modelo' => 'Fusion', 'marca' => 'Ford', 'ano' => 2019, 'preco' => 75000);
array_push($list, $Car);
function exportList() {
    return $GLOBALS['list'];
}
?>