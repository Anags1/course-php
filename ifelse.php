<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php
            $usuario_possui_cartao_loja = true;
            $valor_compra = 259;

            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            } else if ($usuario_possui_cartao_loja && $valor_compra >= 250) {
                $valor_frete = 10;
                $recebeu_desconto_frete = true;
            } else if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
                $valor_frete = 25;
                $recebeu_desconto_frete = true;
            } else {
                $recebeu_desconto_frete = false;
            }

        ?>
        <h1>Detalhes do Pedido:</h1>   
        <p>Possui cartão da loja?
            <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>    
        </p>

        <p>
            Valor da compra: <?= $valor_compra ?>
        </p>

        <p>Recebeu desconto no frete?
            <?php
                $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';

                echo $teste;
            ?>    
        </p>

        <p>
            Valor do frete: <?= $valor_frete ?>
        </p>


    </body>
</html>