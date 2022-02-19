<!DOCTYPE html>
<html">

    <head>
        <meta charset="UTF-8">
        <title>ForEach</title>
    </head>

    <body>
        <h1>Selecione um sabor:</h1>
        <?php $sabores = ['Mussarela', 'Calabresa', 'Portugesa', 'Brigadeiro', 'Chocolate']; ?>
        <?php
        if (array_key_exists('sabores', $_POST)) {
            foreach ($_POST['sabores'] as $sabor_escolhido) {
                echo 'Voce escohleu o sabor ' . $sabor_escolhido . '<br>';
            }
        } ?>

        <form method="post">
            <?php foreach ($sabores as $sabor) { ?>
                <input type="checkbox" name="sabores[]" id="<?php echo $sabor ?>" value="<?php echo $sabor ?>">
                <label for="<?php echo $sabor ?>"><?php echo $sabor ?></label>
            <?php } ?>
            <button type="submit">
                Enviar pedido
            </button>
        </form>

    </body>

    </html>