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
            //variavel constante: caixa alta, não precisa usar $
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');
            
            echo BD_URL;
            echo BD_USUARIO;
            echo BD_SENHA;
        ?>
    </body>
</html>