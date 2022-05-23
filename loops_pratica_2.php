<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $estagiarios = array(
        array('nome' => 'Luana', 'salario'=> 3000, 'data_nascimento' => "06/03/2002"),
        array('nome' => 'John', 'salario'=> 2600),
        array('nome' => 'Julie', 'salario'=> 3200)
    );

    echo '<pre>';
    print_r($estagiarios);
    echo '</pre>';

    foreach($estagiarios as $idx => $nome_estagiarios){
        foreach($nome_estagiarios as $idx2 => $valor){
            echo "$idx2 - $valor <br />";
        }
        echo "<hr />";
    }

    ?>
</body>

</html>