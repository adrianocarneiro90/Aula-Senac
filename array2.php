<!DOCTYPE html>
<html">

    <head>
        <meta charset="UTF-8">
        <title>ForEach</title>
    </head>

    <body>
        <?php $cesta = [
            'banana' => 12,
            'laranja' => 6,
            'abacaxi' => 2,
            'maça' => 10
        ]; ?>
        <h1>A cesta contém:</h1>
        <ul>
            <?php foreach ($cesta as $fruta => $quantidade) {
                echo "<li>$quantidade Unidade(s) de $fruta</li>  ";
            } ?>
        </ul>

    </body>

    </html>