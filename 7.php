<?php
    $taxadia = 60;
    $taxakm = 0.15;


    print"digite a distacia percorida";
    $km = (int) fgets(STDIN);
    print"digite a qnt de dias com o carro";
    $dias = (int) fgets(STDIN);

    $TAXADIATOTAL = $taxadia*$dias;
    $TAXAKMTTOTAL = $taxakm*$km;
    $TAXATOTAL = $TAXADIATOTAL+$TAXAKMTOTAL;
    print"total a pagar pelo carro $TAXATOTAL";

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 14/03/19
 * Time: 08:26
 */