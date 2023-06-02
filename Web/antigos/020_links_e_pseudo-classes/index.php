<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>

<body>
    <?php
    // string
    $nome = 'David Stoner';
    // int
    $idade = '20';
    // float
    $peso = '73,4';
    // boolean
    ?>
    <h1>Ficha cadastral</h1><br>
    <p>Nome:
        <?php
        echo $nome
        ?>
    </p>
    <hr>

    <?php
    $idade = 20;
    $peso = 73;

    if ($idade >= 16 && $idade <= 69  && $peso >= 50) {
        echo 'Atende aos requisitos';
        # code...
    } else {
        echo 'Não atende aos requisitos';
        # code...
    }
    ?>
    <hr>

    <?php
    $parametro = 'abc';

    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            # code...
            break;
        case 2:
            echo 'Entrou no case 2';
            # code...
            break;
        case 3:
            echo 'Entrou no case 3';
            # code...
            break;
        default:
            # code...
            echo 'Entrou no Default';
            break;
    }
    ?>
    <hr>
    <?php

    ?>
    <a href="../index.html">
        <p>voltar</p>
    </a>

</body>

</html>