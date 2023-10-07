<?php
namespace App\figuras\figurasAccion;

use App\figuras\Circulo;


function areaCirculo(){
    $circulo = new Circulo();
    $radio = $circulo->get('radio');
    $area = $circulo->get('area');
    $pi = $circulo->get('pi');

    $area = pow($radio, 2)*$pi;
    return $area;
}
?>