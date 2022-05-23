<?php 

    $valor_salario = 1800;

    calcImposto($valor_salario);

    function calcImposto($valor_salario) {

        if ($valor_salario <= 1903.98) {
            echo 'isento de IR';
        } else if ($valor_salario >= 1903.99 && $valor_salario <= 2826.65) {
            echo 'possui taxa de 7,5%';
        } else if ($valor_salario >= 2826.66 && $valor_salario <= 3751.05) {
            echo 'possui taxa de 15%';
        } else if ($valor_salario >= 3751.06 && $valor_salario <= 4664.68) {
            echo 'possui taxa de 22,5%';
        } else if ($valor_salario >= 4664.68){
            echo 'terá a taxa de 27,5%';
        }    
    }

