<!DOCTYPE html>
<html lang="en">
<?php
$status = 0;
?>

<head>
    <meta charset="UTF-8">
    <title>Pedido Deliveri</title>
</head>

<body>
    <h1>Pedido realizado!</h1>
    <p> (if/else if) O Seu pedido esta:
        <?php
        if ($status == 0) {
            echo "Aguardando confirmação";
        } else if ($status == 1) {
            echo "Sendo preparado";
        } else if ($status == 2) {
            echo "A caminho";
        } else if ($status == 3) {
            echo "Entregue!";
        } else {
            echo "Desconhecido";
        }
        ?>
    </p>
    <p> (switch case) O Seu pedido esta:
        <?php
        switch ($status) {
            case 0:
                echo "Aguardando confirmação";
                break;
            case 1:
                echo "Sendo preparado";
                break;
            case 2:
                echo "A caminho";
                break;
            case 3:
                echo "Entregue!";
                break;
            default: // caso nao se encaixe em nem um dos casos declarados
                echo "Desconhecido";
        }
        ?>
    </p>

</body>

</html>