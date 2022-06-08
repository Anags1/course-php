<?php 
    $teste = 'rosca';

    /*if ($teste == 'biscoito') {
        echo 'SIM é igual a biscoito';
    } else if ($teste == 'bolacha') {
        echo 'SIM é igual a bolacha.';
    } else {
        echo 'NÃO';
    }*/


    switch ($teste) {
        case 'bolacha':
            echo 'é bolacha';
        break;

        case 'biscoito':
            echo 'é biscoito';
        break;

        case 'rosca':
            echo 'é rosca';
        break;

        default:
            echo 'é NADA';
        break;
    } 
?>