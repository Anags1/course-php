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
        $nome = 'Jay';
        $idade = 29;
        $peso = 58.5;
        $fumante = false;


    ?>    
    
    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante: <?= $fumante ?> </p>
    

    </body>
</html>