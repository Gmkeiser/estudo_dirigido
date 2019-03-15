<?php
    $area = 109;
    $lata_rendimento = 108;
    $lata_preço = 80;
    $qnt_latas = ceil(value $area/ $lata_rendimento);
    $lata_custo = $qnt_latas * $lata_preço;
    print"A qnt de latas de tintas necessarias é:$qnt_latas";
    print"ira custar:$lata_custo";
    $qnt_galoes = ceil(value $area/$galao_rendimento);
    $galao_custo = $qnt_galoes * $galao_preço;
    print"qnt de galões necessarios:$qnt_galoes";
    print"ira custar:$galao_custo";
    $qnt_latas = (int) $area / $lata_rendimento;
    $faltou_lata = $area % $lata_rendimento;
    $qts_galoes = ceil(value : $faltou_lata / $galao_rendimento);
    print"$qnt_latas - $faltou_lata";




/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 14/03/19
 * Time: 08:44
 */