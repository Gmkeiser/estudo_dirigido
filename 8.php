<?php

print "há quanto tempo você fuma ? ";
$anos_fumados=fgets (STDIN);

$cigarros_fumados = 10*365*3$anos_fumados;
$minutos_perdidos = $cigarros_fumados *11;
$horas_perdidas = $minutos_perdidos/60;
$dias_perdidos = round($horas_perdidas/24);

print "Você perdeu $dias_perdidos dias de vida";

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 14/03/19
 * Time: 08:42
 */