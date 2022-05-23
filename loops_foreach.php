<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $itens = array('teclado', 'mouse', 'monitor', 'notebook', 'pendrive');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $item) {
        echo "$item ";
        if ($item == 'teclado') {
            echo "(*Compre uma teclado e ganhe 25% de desconto na compra um pendrive)";
        }
        echo '<br />';
    }

    ?>
</body>

</html> 